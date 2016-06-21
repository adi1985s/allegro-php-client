<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemremovewatchstruct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemRemoveWatchStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemRemoveWatchStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemRemoveWatchStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemremovewatchstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->item[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemRemoveWatchStruct
     */
    public function offsetGet($offset)
    {
      return $this->item[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemRemoveWatchStruct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->item[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->item[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemRemoveWatchStruct Return the current element
     */
    public function current()
    {
      return current($this->item);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->item);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->item);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->item);
    }

    /**
     * Countable implementation
     *
     * @return ItemRemoveWatchStruct Return count of elements
     */
    public function count()
    {
      return count($this->item);
    }

}
