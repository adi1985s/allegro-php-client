<?php
/**
 * Shipment.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Shipment info.
 * Contains info about a parcel, including address and contact person.
 */
class Shipment
{

    /**
     * The customer will pick the package personally.
     * In this case the address, city.. relate to the point of the pick up
     */
    const SHIPPING_PERSONAL_PICK_UP = 'personal';
    /**
     * The customer wants to receive the package via a delivery service.
     * Exact service can be retrieved via a method call
     */
    const SHIPPING_DELIVERY_SERVICE = 'delivery_service';

    /**
     * @var string required
     */
    public $contactPersonFullName;

    /**
     * Contact email
     *
     * @var string optional
     */
    public $contactPersonEmail;

    /**
     * Contact number
     *
     * @var string optional
     */
    public $contactPhoneNumber;

    /**
     * Shipping method
     *
     * @var mixed required - One of the <b>self::SHIPPING_*</b> consts
     */
    public $shippingMethod = self::SHIPPING_DELIVERY_SERVICE;

    /**
     * Customer can add a custom identification <br>
     * Usually it's then printed on the package
     *
     * @var string optional
     */
    public $customerShipmentIdentifier;

    /**
     * Shipping fee with VAT
     *
     * @var float required
     */
    public $shippingFee;

    /**
     * @var Address
     */
    public $address;

}
