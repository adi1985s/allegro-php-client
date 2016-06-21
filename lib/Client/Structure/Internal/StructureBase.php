<?php
/**
 * StructureBase.php
 *
 * @author    Jan Chren <dev.rindeal AT gmail.com>
 * @copyright Copyright (c) 2014-2015, Jan Chren. All Rights Reserved.
 * @license   Please view the LICENSE file
 *            For the full copyright and license information, please view the LICENSE
 *            file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client\Structure\Internal;

/**
 * StructureBase <br>
 * <br>
 * Base class for all structures <br>
 * All properties should follow these rules:
 * - datetimes in *NIX timestamp format
 * - strings with unicode support
 */
abstract class StructureBase
{
    /**
     * @var \Rindeal\Allegro\Client\Structure\Internal\Property[]
     *  Associative array where each key represents property name and
     *  each value is an instance of Property.
     *  Initialization of this variable is done in __construct().
     */
    protected $properties;

    /**
     * @param $key
     * @return Property
     */
    public function getPropertyObject($key){
        if(!isset($this->properties[$key]))
            throw new \LogicException(
                sprintf('Property "%s" does not exist', $this->propertyNameTostring($key))
            );

        return $this->properties[$key];
    }

    /**
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->getPropertyObject($key)->get();
    }

    /**
     * @param string $key
     * @param mixed $value
     */
    public function __set($key, $value)
    {
        $prop = $this->getPropertyObject($key);

        if ($value instanceof SpecialValue) {
            if ($value instanceof Lock)
                $prop->lock();
            elseif ($value instanceof Unlock)
                $prop->unlock();
        } else {
            try {
                $prop->set($value);
            } catch (\Exception $e) {
                throw new \InvalidArgumentException(
                    $this->propertyNameTostring($key).":\n".$e->getMessage(), $e->getCode(), $e
                );
            }
        }
    }

    /**
     * @param string $key
     * @return bool
     */
    public function __isset($key)
    {
        return isset($this->properties[$key]);
    }

    /**
     * @param string $key
     */
    public function __unset($key)
    {
        unset($this->properties[$key]);
    }


    public function validateProperties()
    {
        array_walk($this->properties, function ($prop) {
            /** @var $prop Property */
            $prop->validate();
        });

        return $this;
    }

    public function lockProperties()
    {
        array_walk($this->properties, function ($prop) {
            /** @var $prop Property */
            $prop->lock();
        });

        return $this;
    }

    public function unlockProperties()
    {
        array_walk($this->properties, function ($prop) {
            /** @var $prop Property */
            $prop->unlock();
        });

        return $this;
    }

    /**
     * @param array $select
     * @return string
     */
    protected function toString(array $select = []){
        $a = [];

        if(empty($select))
            $select = array_keys($this->properties);

        foreach ($this->properties as $name => $prop) {
            if(in_array($name, $select))
                $a[$name] = $prop->get();
        }

        return json_encode($a);
    }

    /**
     * @param $name
     * @return string
     */
    protected function propertyNameTostring($name)
    {
        return get_class($this).'->'.$name;
    }
}
