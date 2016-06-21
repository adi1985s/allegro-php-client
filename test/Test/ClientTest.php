<?php
/**
 * ClientTest.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Test;


use Rindeal\Allegro\Client;
use Rindeal\Allegro\Client\ApiCredentials;
use Rindeal\Allegro\Client\ClientParameters;
use Rindeal\Allegro\Client\HttpClient\HttpClientParameters;
use Rindeal\Allegro\Client\Session;
use Rindeal\Allegro\Client\Structure\Country;


class ClientTest extends TestCase
{
    public $client;


    public function testConstructor(){
        $credentials = new ApiCredentials(WEBAPI_KEY, USER_LOGIN, HASHED_PASSWORD);
        $session = new Session($credentials, new Country(COUNTRY));

        $httpClientParams = new HttpClientParameters();
        $httpClientParams->baseUrl = BASE_URL;

        $params = new ClientParameters();
        $params->inDevMode = true;
        $params->httpClientParams = $httpClientParams;

        $client = $this->client = new Client($session, $params);
        $client->authenticate();
    }
}
