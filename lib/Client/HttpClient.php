<?php
/**
 * ClientParameters.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014-2016, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client;


use Rindeal\Allegro\Client;
use Rindeal\Allegro\Client\Exceptions\HttpClientException;
use Rindeal\Allegro\Client\HttpClient\HttpClientParameters;
use Rindeal\Allegro\Client\HttpClient\InjectionParameters;
use Rindeal\Allegro\Client\HttpClient\SoapClient;
use Rindeal\Allegro\Client\HttpClient\Wsdl\DoLoginEncRequest;
use Rindeal\Allegro\Client\HttpClient\Wsdl\DoQueryAllSysStatusRequest;
use Rindeal\Allegro\Client\HttpClient\Wsdl\SysStatusType;
use Rindeal\Allegro\Client\Structure\Period;


/**
 * HttpClient provides "low-level" communication with Allegro servers
 *
 * Currently it communicates via SOAP protocol based on XML
 */
class HttpClient
{
    /**
     * @var Client upstream
     */
    private $client;

    /**
     * @var SoapClient downstream
     */
    private $soapClient;

    /**
     * @var \Psr\Cache\CacheItemPoolInterface
     */
    private $cache;

    /**
     * @var InjectionParameters
     */
    public $injectionParameters;

    /**
     * @param Client $client
     * @param HttpClientParameters $params
     *
     * @see  SoapClient::SoapClient()
     */
    public function __construct(Client $client, HttpClientParameters $params = null) {
        $this->client = $client;
        if (is_null($params)) {
            $params = new HttpClientParameters();
        }
        $this->cache = $client->getCache();
        $session = $client->getSession();

        if (empty($params->baseUrl)) {
            $base_urls = $client->inDevMode() ? HttpClientParameters::$DEV_BASE_URLS : HttpClientParameters::$BASE_URLS;
            if (!isset($base_urls[$session->country->id])) {
                throw new \LogicException(
                    "I don't know baseUrl for country '$session->country', you have to supply one manually "
                    ."into HttpClientParameters object found in ClientParameters"
                );
            }

            $params->baseUrl = $base_urls[$session->country->id];
        }

        $this->injectionParameters = new InjectionParameters([
            'webapiKey' => $session->credentials->webapiKey,
            'countryId' => $session->country->id,
            'countryCode' => $session->country->id, // yep, this is right
        ]);

        // this may throw
        $soapClient = new SoapClient(
            [
                'encoding' => 'UTF-8',
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'cache_wsdl' => WSDL_CACHE_DISK, // TODO: make it optional? settable via HttpClientParameters?
                'trace' => true, // enables __getLastResponse()/__getLastRequest() functions
                'user_agent' => $params->userAgent,
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'connection_timeout' => $params->connectionTimeout,
            ],
            $params->baseUrl,
            $this->client
        );

        $this->soapClient = $soapClient;
    }

    /**
     * @param string $login
     * @param string $hashedPassword
     *
     * @throws HttpClientException
     */
    public function authenticate($login = '', $hashedPassword = '') {
        $session = $this->client->getSession();
        $credentials = $session->credentials;
        $cacheItem = $this->cache->getItem($session);

        if (!empty($login)) {
            $credentials->userLogin = $login;
        }
        if (!empty($hashedPassword)) {
            $credentials->hashedPassword = $hashedPassword;
        }

        // TODO: make it optionally cacheable
        if (!$cacheItem->isHit()) {
            $req = new DoLoginEncRequest();
            $req->setUserLogin($credentials->userLogin)
                ->setUserHashPassword($credentials->hashedPassword)
                ->setWebapiKey($credentials->webapiKey)
                ->setCountryCode($session->country->id)
                ->setLocalVersion($this->getWebApiVersion()->getVerKey());

            try {
                $ret = $this->soapClient->doLoginEnc($req);
            } catch (HttpClientException $e) {
                echo($this->getLastRequest()."\n"); // DEBUG
                throw $e;
            }

            $cacheItem->set($ret)->expiresAfter(10 * Period::SECONDS_PER_MINUTE);
            $this->cache->save($cacheItem);
        } else {
            $ret = $cacheItem->get();
            // TODO: check if the $session->sessionId from cache is still valid, not because of time,
            //  but because of the max number of concurrently active sessions (3)
        }

        $session->userId = $ret->getUserId();
        $session->sessionId = $ret->getSessionHandlePart();

        $this->injectionParameters->setMulti([
            'sessionHandle' => $session->sessionId,
            'sessionId' => $session->sessionId,
            // TODO userId?
        ]);
    }

    /**
     * @return SysStatusType
     */
    public function getWebApiVersion() {
        /**
         * @var $apiVersion SysStatusType
         */
        static $apiVersion = null;

        if (is_null($apiVersion)) {
            $cacheItem = $this->cache->getItem(__CLASS__.'\\'.__METHOD__);

            if (!$cacheItem->isHit()) {
                $session = $this->client->getSession();
                $countryId = $session->country->id;

                $req = new DoQueryAllSysStatusRequest();
                // we cannot rely on injectionParameters as they might not be present at this moment
                $req->setCountryId($countryId)
                    ->setWebapiKey($session->credentials->webapiKey);

                $ret = $this->soapClient->doQueryAllSysStatus($req);

                foreach ($ret->getSysCountryStatus()->getItem() as $i => $sysStatus) {
                    if ($sysStatus->getCountryId() == $countryId) {
                        $apiVersion = $sysStatus;
                        break;
                    }
                }

                $cacheItem->set($apiVersion)->expiresAfter(Period::SECONDS_PER_DAY);
                $this->cache->save($cacheItem);
            } else {
                $apiVersion = $cacheItem->get();
            }
        }

        return $apiVersion;
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient() {
        return $this->soapClient;
    }

    /**
     * Get raw request dump
     *
     * Useful for debugging
     *
     * @return string
     */
    public function getLastRequest() {
        return $this->formatXml($this->soapClient->__getLastRequest());
    }

    /**
     * Get raw response dump
     *
     * Useful for debugging
     *
     * @return string
     */
    public function getLastResponse() {
        return $this->formatXml($this->soapClient->__getLastResponse());
    }

    private function formatXml($xmlString) {
        $simpleXml = new \SimpleXMLElement($xmlString);
        $dom = dom_import_simplexml($simpleXml)->ownerDocument;
        $dom->formatOutput = true;

        return $dom->saveXML();
    }
}
