<?php
/**
 * Address.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014-2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

/**
 * Class Address
 */
class Address
{

    /**
     * Street and house number
     *
     * @var string required
     */
    public $street;

    /**
     * City (including district in case there are more cities with this name in the country/state)
     *
     * @var string required
     */
    public $city;

    /**
     * State, province, Bundesland, Kanton...
     *
     * @var string optional
     */
    public $state;

    /**
     * Postal code, post code, ZIP, PIN code
     *
     * @var string required
     */
    public $postalCode;

    /**
     * ICU country code
     *
     * @var string optional
     */
    public $country;
}
