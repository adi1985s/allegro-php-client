<?php
/**
 * Session.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014-2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client;

use Rindeal\Allegro\Client\Structure\Country;
use Rindeal\Allegro\Client\Structure\Internal\Property;
use Rindeal\Allegro\Client\Structure\Internal\StructureBase;
use Rindeal\Allegro\Client\Structure\Internal\ValidationException;

/**
 * Contains variables regarding the current session
 *
 * @property-read ApiCredentials $credentials
 *  Credentials required for the authentication against Allegro servers
 *
 * @property-read Country $country
 *  Country of the currently logged user
 *
 * @property int $userId
 *  Allegro Client userId.
 *  It's a unique number identifying a user (basically a transcription of $userLogin to a number),
 *  and is retrieved from the API response upon a successful authentication.
 *
 * @property string $sessionId
 *  Allegro Api Client sessionId.
 *  It's retrieved upon a successful authentication and serves similarly to oauth access token.
 */
class Session extends StructureBase
{
    public function __construct(ApiCredentials $credentials, Country $country) {
        $credentials->getPropertyObject('webapiKey')->validate();

        $this->properties = [
            'credentials' => new Property([
                'default' => $credentials,
                'validator' => function ($val) {
                    if (!($val instanceof ApiCredentials)) {
                        throw new ValidationException();
                    }
                },
                'lock' => true
            ]),
            'country' => new Property([
                'default' => $country,
                'validator' => function ($val) {
                    if (!($val instanceof Country)) {
                        throw new \Exception('Not an instance of Country');
                    }
                },
                'lock' => true
            ]),
            'userId' => new Property([

            ]),
            'sessionId' => new Property([

            ])
        ];
    }

    public function __toString() {
        return $this->toString();
    }
}
