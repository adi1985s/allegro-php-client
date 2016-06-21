<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoAddDescToItemsRequest
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
     * @var string $itDescription
     */
    protected $itDescription = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsIdArray
     * @param string $itDescription
     */
    public function __construct($sessionHandle = null, $itemsIdArray = null, $itDescription = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsIdArray = $itemsIdArray;
      $this->itDescription = $itDescription;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoAddDescToItemsRequest
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoAddDescToItemsRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
      $this->itemsIdArray = $itemsIdArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getItDescription()
    {
      return $this->itDescription;
    }

    /**
     * @param string $itDescription
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoAddDescToItemsRequest
     */
    public function setItDescription($itDescription)
    {
      $this->itDescription = $itDescription;
      return $this;
    }

}
