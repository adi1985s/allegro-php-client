<?php
/**
 * AukroPaymentMethods.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure\WebApi;

use Rindeal\Allegro\Client\Structure\StructureBase;

/**
 * PaymentMethods <br>
 * Used in some method calls
 */
class PaymentMethods extends StructureBase
{

    /**
     * PayU
     *
     * @link http://www.payu.cz PayU
     */
    const PAYU = 1;
    /**  standard bank wire transfer */
    const WIRE_TRANSFER = 2;
    /**  C.O.D. Cash On Delivery */
    const COD = 4;
    /**  all types together */
    const ALL = 7;

}
