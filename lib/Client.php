<?php
/**
 * Client.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro;


use Rindeal\Allegro\Client\ClientParameters;
use Rindeal\Allegro\Client\Exceptions\HttpClientException;
use Rindeal\Allegro\Client\HttpClient;
use Rindeal\Allegro\Client\Session;


/**
 * Class Client
 */
class Client
{
    const NAME = 'AllegroClient';
    const VERSION = '0.2.0';
    const HOMEPAGE = 'https://github.com/rindeal/allegro-php-client';


    /**
     * @var \Rindeal\Allegro\Client\ClientParameters
     */
    protected $params;

    /**
     * @var \Rindeal\Allegro\Client\HttpClient
     */
    protected $httpClient;

    /**
     * @var \Rindeal\Allegro\Client\Session
     */
    protected $session;


    /**
     * @param Session $session
     * @param ClientParameters|null $params
     */
    public function __construct(Session $session, ClientParameters $params = null) {
        $this->session = $session;

        if (is_null($params)) {
            $params = new ClientParameters();
        }
        $this->params = $params;

        $this->httpClient = new HttpClient($this, $params->httpClientParams);
    }

    /**
     * @param string $login
     * @param string $hashedPassword
     *
     * @throws HttpClientException
     * @throws \Exception
     */
    public function authenticate($login = '', $hashedPassword = '') {
        $this->httpClient->authenticate($login, $hashedPassword);
    }

    /**
     * @return HttpClient\SoapClient
     */
    public function call() {
        return $this->httpClient->getSoapClient();
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient() {
        return $this->httpClient;
    }

    /**
     * @return Session
     */
    public function getSession() {
        return $this->session;
    }

    /**
     * @return \Psr\Cache\CacheItemPoolInterface
     */
    public function getCache() {
        return $this->params->cache;
    }

    /**
     * @return \Psr\Log\LoggerInterface
     */
    public function getLogger() {
        return $this->params->logger;
    }

    /**
     * @return bool
     */
    public function inDevMode() {
        return $this->params->inDevMode;
    }
}
