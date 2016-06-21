<?php
/**
 * ApiCredentials.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator;
use Rindeal\Allegro\Client\Structure\Internal\Property;
use Rindeal\Allegro\Client\Structure\Internal\StructureBase;
use Rindeal\Allegro\Client\Structure\Internal\ValidationException;
use Rindeal\Allegro\Client\Structure\Stringable;

/**
 * Class ApiCredentials
 *
 * @property string $webapiKey
 *  Allegro webapiKey
 * @property string $userLogin
 *  Allegro userLogin
 * @property string $hashedPassword
 *  Hash of the userPassword. If you manage to have plaintext userPassword,
 *  then use ApiCredentials::hashPassword()
 */
class ApiCredentials extends StructureBase implements Stringable
{
    /**
     * @var Property[]
     */
    protected $properties;

    public function __construct($webapiKey = null, $userLogin = null, $hashedPassword = null) {
        $this->properties['webapiKey'] = new Property([
            'validator' => function ($value) {
                try {
                    Validator::stringType()->noWhitespace()->notEmpty()->length(4)->assert($value);
                } catch (NestedValidationException $e) {
                    throw new ValidationException($e);
                }
            }
        ]);

        if (!is_null($webapiKey)) {
            $this->properties['webapiKey']->set($webapiKey)->lock();
        }

        // --------------------

        $this->properties['userLogin'] = new Property([
            'validator' => function ($value) {
                try {
                    Validator::stringType()->noWhitespace()->notEmpty()->length(4)->assert($value);
                } catch (NestedValidationException $e) {
                    throw new ValidationException($e);
                }
            }
        ]);

        if (!is_null($userLogin)) {
            $this->properties['userLogin']->set($userLogin)->lock();
        }

        // ----------------------

        $this->properties['hashedPassword'] = new Property([
            'validator' => function ($value) {
                try {
                    Validator::stringType()->noWhitespace()->notEmpty()
                        // http://stackoverflow.com/a/8571649/2566213
                        ->regex('/^([A-Za-z0-9+\/]{4})*([A-Za-z0-9+\/]{4}|[A-Za-z0-9+\/]{3}=|[A-Za-z0-9+\/]{2}==)$/')
                        ->assert($value);
                } catch (NestedValidationException $e) {
                    throw new ValidationException($e);
                }
            }
        ]);

        if (!is_null($hashedPassword)) {
            $this->properties['hashedPassword']->set($hashedPassword)->lock();
        }
    }

    public static function hashPassword($password) {
        return base64_encode(hash('sha256', $password, true));
    }

    public function __toString() {
        $ret = [];

        foreach (['webapiKey', 'userLogin', 'hashedPassword'] as $name) {
            $ret[$name] = hash('sha512', $this->$name, true);
        }

        return json_encode($ret);
    }
}
