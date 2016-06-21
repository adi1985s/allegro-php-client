<?php
/**
 * Payment.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Class Payment
 *
 * @property-read mixed   $method   One of the self::METHOD_* consts
 * @property-read float   $amount
 * @property-read string  $currency required <br> One of the Currency::* consts
 * @property int          $vat      optional<br>
 *                                  VAT in percentage, eg. 10 <br>
 *                                  If not specified, assume the price has VAT included and you don't know it's amount.
 * @property int          $payedAt  optional<br>
 *                                  Specifies the time the payment was accepted. Please note that the `$isPayed`
 *                                  property can be set to `true` without filling this property, so always check the
 *                                  `$isPayed` property
 * @property bool         $isPayed  required<br>
 *                                  Specifies whether the payment is already payed and successfully processed <br>
 *                                  Put false if the payment method is C.O.D. and ship the item
 *
 */
class Payment
{

    const METHOD_PAYU          = 'payu';
    const METHOD_WIRE_TRANSFER = 'wire_transfer';
    const METHOD_COD           = 'cod';

    /**
     * Specifies whether the payment is already payed and successfully processed <br>
     * Put false if the payment method is C.O.D. and ship the item
     *
     * @var bool required
     */
    public $isPayed;


    public function construct($method, $amount, $currency)
    {
        $this->method   = $method;
        $this->amount   = $amount;
        $this->currency = $currency;
    }
}
