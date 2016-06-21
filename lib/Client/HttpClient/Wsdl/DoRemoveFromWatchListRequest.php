<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoRemoveFromWatchListRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsIdArray
     */
    public function __construct($sessionHandle = null, $itemsIdArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsIdArray = $itemsIdArray;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoRemoveFromWatchListRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsIdArray()
    {
      return $this->itemsIdArray;
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoRemoveFromWatchListRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
      $this->itemsIdArray = $itemsIdArray;
      return $this;
    }

}
