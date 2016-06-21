<?php
/**
 * Customer.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Customers - common people
 */
class Customer
{

    /**
     * Coresponds to the Allegro UserId <br>
     * Customers that aren't logged in don't have it
     *
     * @var int optional
     */
    public $userId;
    /**
     * Coresponds to the Allegro UserName <br>
     * Customers that aren't logged in don't have it
     *
     * @var string optional
     */
    public $userName;

    /**
     * Only full name is required
     *
     * @var string optional
     */
    public $firstName;
    /**
     * Only full name is required
     *
     * @var string optional
     */
    public $lastName;
    /**
     * Full name
     *
     * @var string required
     */
    public $fullName;

    /**
     * If the customer is a company this will point to an object containing additional info
     *
     * @var Company|null
     */
    public $company = null;
    /**
     * Primary email address, used for communication
     *
     * @var string required
     */
    public $email;
    /**
     * Will be converted to numeric only string
     *
     * @var string
     */
    public $phone;
    /**
     * Invoice address
     *
     * @var \Rindeal\Allegro\Client\Structure\Address required
     */
    public $address;
    /**
     * One of the Gender::* consts
     *
     * @var string optional
     */
    public $gender;

    public function __construct($fullName, $email, $address)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->address = $address;
    }
}
