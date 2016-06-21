<?php
/**
 * CacheInterface.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Cache;

/**
 * Interface CacheInterface
 */
interface CacheInterface
{
    /**
     * @param string $poolId
     *
     * @return \Psr\Cache\CacheItemPoolInterface
     */
    public function getPool($poolId);
}
