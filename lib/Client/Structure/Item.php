<?php
/**
 * Item.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Class Item.
 * Contains info about an item someone purchased.
 */
class Item
{

    const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    const DISCOUNT_TYPE_ABSOLUTE   = 'absolute';

    /**
     * Name of the item
     *
     * @var string required
     */
    public $name;

    /**
     * Allegro ID
     *
     * @var string required
     */
    public $id;

    /**
     * You can put here any id you want to bind with this item.
     * Can internal eshop ID for example.
     *
     * @var string optional
     */
    public $customId;

    /**
     * Price without VAT, without discounts, per a unit of measure.
     *
     * @var float required
     */
    public $price;

    /**
     * VAT in percentage
     *
     * @var int required
     */
    public $vat;

    /**
     * Discount amount in percent or absolute number. <br>
     * In case of a normal discount, insert negative number. If you sell the item for a higher price, insert positive number;
     *
     * @var float optional
     */
    public $discount = 0.0;

    /**
     * One of the self::DISCOUNT_TYPE_* consts
     *
     * @var mixed required if you fill $discount
     */
    public $discountType = self::DISCOUNT_TYPE_ABSOLUTE;

    /**
     * @var float optional
     */
    public $quantity = 1.0;

}
