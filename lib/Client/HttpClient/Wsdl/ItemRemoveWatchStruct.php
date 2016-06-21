<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemRemoveWatchStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $itemId
     * @param int $result
     */
    public function __construct($itemId = null, $result = null)
    {
      $this->itemId = $itemId;
      $this->result = $result;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemRemoveWatchStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param int $result
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemRemoveWatchStruct
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
