<?php
/**
 * HttpClientParameters.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015-2016, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\HttpClient;


use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator;
use Rindeal\Allegro\Client;
use Rindeal\Allegro\Client\Structure\Country;
use Rindeal\Allegro\Client\Structure\Internal\Property;
use Rindeal\Allegro\Client\Structure\Internal\StructureBase;
use Rindeal\Allegro\Client\Structure\Internal\ValidationException;
use Rindeal\Allegro\Client\Structure\Stringable;


/**
 * Class HttpClientParameters holds parameters
 *
 * @property string $userAgent
 *  User-Agent used for WebAPI calls
 *
 * @see http://tools.ietf.org/html/rfc2616#section-14.43    RFC for User-Agent
 *
 * @property int $connectionTimeout
 *  Maximum time in seconds for which connection to Allegro servers will be hold
 *
 * @property string $baseUrl
 *  Base URL for subsequent Allegro WebAPI calls.
 *  One of HttpClientParameters::$BASE_URLS
 *
 * @note required
 */
class HttpClientParameters extends StructureBase implements Stringable
{
    /**
     * @var array
     *  Supply on of these to HttpClientParameters::$baseUrl
     */
    public static $BASE_URLS = [
        Country::ID_CZ => 'https://webapi.aukro.cz/service.php?wsdl',
        Country::ID_PL => 'https://webapi.allegro.pl/service.php?wsdl'
    ];

    public static $DEV_BASE_URLS = [
        Country::ID_CZ => 'https://webapi.aukro.cz.webapisandbox.pl/service.php?wsdl',
        Country::ID_PL => 'https://webapi.allegro.pl.webapisandbox.pl/service.php?wsdl'
    ];

    public function __construct() {
        $this->properties = [
            'userAgent' => new Property([
                'default' => sprintf('%s/%s (+%s)', Client::NAME, Client::VERSION, Client::HOMEPAGE),
                'validator' => function ($val) {
                    try {
                        Validator::stringType()->length(6)->notEmpty()->assert($val);
                    } catch (NestedValidationException $e) {
                        throw new ValidationException($e);
                    }
                }
            ]),
            'connectionTimeout' => new Property([
                'default' => 10,
                'validator' => function ($val) {
                    try {
                        Validator::intType()->min(2, true)->max(600)->assert($val);
                    } catch (NestedValidationException $e) {
                        throw new ValidationException($e);
                    }
                }
            ]),
            'baseUrl' => new Property([
                'validator' => function ($val) {
                    try {
                        Validator::stringType()->notEmpty()->assert($val);
                    } catch (NestedValidationException $e) {
                        throw new ValidationException($e);
                    }
                }
            ])
        ];
    }

    public function __toString() {
        return parent::toString();
    }

}
