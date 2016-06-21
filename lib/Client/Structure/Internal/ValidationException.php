<?php
/**
 * ValidationException.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure\Internal;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Exceptions\NestedValidationExceptionInterface;

class ValidationException extends \InvalidArgumentException
{
    public function __construct($message = '', $code = 0, $previous = null)
    {
        if ($message instanceof NestedValidationException) {
            /** @var NestedValidationException $e */
            $e = $message;
            parent::__construct($e->getFullMessage(), $e->getCode(), $e);
        } else {
            parent::__construct($message, $code, $previous);
        }
    }
}
