<?php
/**
 * SoapClient.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015-2016, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\HttpClient;


use Rindeal\Allegro\Client;
use Rindeal\Allegro\Client\Exceptions\HttpClientException;


class SoapClient extends Wsdl\ServiceService
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var int
     */
    private $cacheTtl = -1;

    public function __construct($options, $baseUrl, Client $client) {
        parent::__construct($options, $baseUrl);

        $this->client = $client;
    }

    /**
     * @return mixed Should return one of methodNameResponse objects from the Client\HttpClient\Wsdl namespace
     * @see \SoapClient::__soapCall()
     * @throws HttpClientException
     */
    public function __soapCall($functionName, $arguments, $options = null, $inputHeaders = null, &$outputHeaders = null) {
        // Inject parameters
        if (count($arguments) > 0 && is_object($arguments[0])) {
            // request should be one of the *Request classes from the Wsdl namespace
            $request = $arguments[0];
            foreach ($this->client->getHttpClient()->injectionParameters as $name => $val) {
                // WARNING: following code is dependent on the naming convention of the WSDL2PHP generator
                $getterName = 'get'.ucfirst($name);
                $setterName = 'set'.ucfirst($name);

                if (property_exists($request, $name) && // check if exists
                    method_exists($request, $getterName) && // check if is gettable
                    is_null(call_user_func([$request, $getterName])) && // check if set
                    method_exists($request, $setterName) // check if is settable
                ) {
                    call_user_func([$request, $setterName], $val); // set def val
                }
            }
        }

        // possible to add hooking here

        try {
            if ($this->isCacheable()) {
                $key = serialize(func_get_args());
                $cache = $this->client->getCache();
                $item = $cache->getItem($key);

                if ($item->isHit()) {
                    $ret = $item->get();
                } else {
                    $ret = parent::__soapCall($functionName, $arguments, $options, $inputHeaders, $outputHeaders);
                    $item->set($ret)->expiresAfter($this->cacheTtl);
                    $cache->save($item);
                }
            } else {
                $ret = parent::__soapCall($functionName, $arguments, $options, $inputHeaders, $outputHeaders);
            }
        } catch (\SoapFault $e) {
            throw new HttpClientException($e);
        }

        $this->resetCacheableStatus();

        return $ret;
    }

    /**
     * Call this method before calling the actual method in order to make use of caches
     *
     * @param int $seconds
     *
     * @return $this
     */
    public function cacheFor($seconds) {
        $this->cacheTtl = $seconds;

        return $this;
    }

    /**
     * Check if caller requested to cache this call
     *
     * @return bool
     */
    private function isCacheable() {
        return ($this->cacheTtl !== -1);
    }

    private function resetCacheableStatus() {
        $this->cacheTtl = -1;
    }

}
