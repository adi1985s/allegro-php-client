<?php
/**
 * Company.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

class Company
{

    /**
     * Full company name
     *
     * @var string required
     */
    public $name;

    /**
     * @var string optional
     */
    public $website;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string optional
     */
    public $contactPersonFullName;

    /**
     * @var string optional
     */
    public $contactPersonEmail;

    /**
     * @var string optional
     */
    public $contactPersonPhone;

    /**
     * IČO (Identifikační číslo osoby)
     *
     * @var string required
     */
    public $ico;

    /**
     * DIČ (Daňové identifikační číslo)
     *
     * @var string optional
     */
    public $dic;
}
