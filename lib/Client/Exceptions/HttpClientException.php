<?php
/**
 * HttpClientException.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014-2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Exceptions;

class HttpClientException extends Exception
{
    public function __construct(\SoapFault $e){
        // those magic properties inside \SoapFault are not officially visible, but unofficially they're around
        // at least since 2010 so they should be safe to use
        $code = $e->faultcode;
        $shortMsg = $e->faultactor;
        $longMsg = $e->faultstring;

         parent::__construct(sprintf('%s - %s: %s', $code, $shortMsg, $longMsg), 0, $e);
    }

}
