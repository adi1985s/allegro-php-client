<?php
/**
 * dealEventType.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure\WebApi;

use Rindeal\Allegro\Client\Structure\StructureBase;

class dealEventType extends StructureBase
{

    const PURCHASE                         = 1;
    const POST_BUY_FORM_FILLED             = 2;
    const POST_BUY_FORM_CANCELED           = 3;
    const CONFIRMATION_OF_PAYMENT_VIA_PAYU = 4;

}
