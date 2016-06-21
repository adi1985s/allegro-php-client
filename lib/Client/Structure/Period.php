<?php
/**
 * Period.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure;

use utilphp\util;

/**
 * Class Period<br>
 * Contains precomputed values of some basic time periods in seconds
 */
class Period
{
    const SECONDS_PER_MINUTE = util::SECONDS_IN_A_MINUTE;
    const SECONDS_PER_HOUR   = util::SECONDS_IN_A_HOUR;
    const SECONDS_PER_DAY    = util::SECONDS_IN_A_DAY;
    const SECONDS_PER_WEEK   = util::SECONDS_IN_A_WEEK;
    const SECONDS_PER_MONTH  = util::SECONDS_IN_A_MONTH;
    const SECONDS_PER_YEAR   = util::SECONDS_IN_A_YEAR;
}
