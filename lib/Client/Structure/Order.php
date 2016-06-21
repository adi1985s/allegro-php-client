<?php
/**
 * Order.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Orders/deals <br>
 * This is a root structure of the Allegro Client
 */
class Order
{

    /**
     * Allegro Transaction/postBuyFrom id (it's the same)
     *
     * @var string required
     */
    public $id;

    /**
     * You can put here whatever you want to identify this order in your system
     *
     * @var string optional
     */
    public $customId;

    /**
     * @var \Rindeal\Allegro\Client\Structure\Customer required
     */
    public $customer;

    /**
     * @var \Rindeal\Allegro\Client\Structure\Shipment required
     */
    public $shipment;

    /**
     * @var \Rindeal\Allegro\Client\Structure\Item[] required
     */
    public $items = [];

    /**
     * Specifies details on payment
     *
     * @var \Rindeal\Allegro\Client\Structure\Payment required
     */
    public $payment;

    /**
     * Customer notes to the order
     *
     * @var string optional
     */
    public $notes = '';

    /**
     * Order creation *NIX timestamp
     *
     * @var int optional
     * @deprecated Use <b>$date</b> instead
     */
    public $createdAt;

    /**
     * Order creation *NIX timestamp
     *
     * @var int optional
     */
    public $date;

    /**
     * @param string $id somethiig
     * @param        $customer
     * @param        $items
     * @param        $shipment
     * @param        $payment
     */
    public function __construct($id, $customer, $items, $shipment, $payment)
    {
        $this->id       = $id;
        $this->customer = $customer;
        $this->items    = $items;
        $this->shipment = $shipment;
        $this->payment  = $payment;
    }
}
