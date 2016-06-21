<?php
/**
 * PostBuyFormPayType.php
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
 * Class PostBuyFormPayType
 *
 * @link http://developers.payu.com/en/introduction.html#introduction_paymenttypes PayU types
 * @link http://allegro.pl/webapi/documentation.php/show/id,1128#method-output Non-PayU types
 */
class PostBuyFormPayType extends StructureBase
{

    /**
     * Cash On Delivery
     */
    const COD = 'collect_on_delivery';
    /**
     * Standard transfer – outside PayU system
     */
    const WIRE_TRANSFER = 'wire_transfer';
    /**
     * for postBuyFormSentBySeller = 1
     */
    const UNKNOWN = 'not_specified';

    // NOTE: Anything else is PayU something

}
