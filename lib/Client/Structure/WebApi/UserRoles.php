<?php
/**
 * UserRoles.php
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
 * UserRoles are used in some method calls
 */
class UserRoles extends StructureBase
{

    const SELLER = 1;
    const BUYER  = 2;

    const TEXT_SELLER = 'seller';
    const TEXT_BUYER  = 'buyer';
}
