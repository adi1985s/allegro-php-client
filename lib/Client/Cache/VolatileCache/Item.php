<?php
/**
 * Item.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2015-2016, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Cache\VolatileCache;


use Psr\Cache\CacheItemInterface;
use Rindeal\Allegro\Client\Cache\InvalidArgumentException;

class Item implements CacheItemInterface
{

    /**
     * @var mixed
     */
    protected $key;
    /**
     * @var mixed
     */
    protected $value;
    /**
     * @var int|null
     */
    protected $expireAt = null;

    public function __construct($key) {
        $this->key = $key;
    }

    public function isHit() {
        return ($this->expireAt && $this->expireAt > time());
    }

    public function get() {
        return $this->value;
    }

    public function set($value, $ttl = null) {
        $this->value = $value;

        return $this;
    }

    // public function expiresAt(\DateTimeInterface $expiration)
    public function expiresAt($expiration) {
        $this->expireAt = $expiration->getTimestamp();
    }

    public function expiresAfter($seconds) {
        if ($seconds instanceof \DateInterval) {
            $seconds = (int)$seconds->format('%s');
        } elseif (!is_int($seconds)) {
            throw new InvalidArgumentException(sprintf('Invalid type of argument (%s)', gettype($seconds)));
        }

        if ($seconds > 0) {
            $this->expireAt = time() + $seconds;
        } else if ($seconds === 0) {
            $this->expireAt = PHP_INT_MAX;
        } else {
            throw new InvalidArgumentException(sprintf('TTL must be >= 0, "%d" given', $seconds));
        }

        return $this;
    }

    public function getKey() {
        return $this->key;
    }
}
