<?php
/**
 * CacheItemPoolBase.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

abstract class CacheItemPoolBase implements CacheItemPoolInterface
{
    /**
     * @var \Psr\Cache\CacheItemInterface[]
     */
    protected $deferredItems_ = [];


    public function getItems(array $keys = [])
    {
        $ret = [];

        foreach ($keys as $key) {
            $ret[$key] = $this->getItem($key);
        }

        return $ret;
    }

    public function saveDeferred(CacheItemInterface $item)
    {
        $this->deferredItems_[$item->getKey()] = $item;

        return $this;
    }

    public function commit()
    {
        foreach ($this->deferredItems_ as $item) {
            $this->save($item);
        }

        return true;
    }
}
