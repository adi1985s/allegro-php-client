<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoGetShipmentDataForRelatedItemsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfLong $itemIds
     */
    protected $itemIds = null;

    /**
     * @param string $sessionId
     * @param ArrayOfLong $itemIds
     */
    public function __construct($sessionId = null, $itemIds = null)
    {
      $this->sessionId = $sessionId;
      $this->itemIds = $itemIds;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetShipmentDataForRelatedItemsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemIds()
    {
      return $this->itemIds;
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetShipmentDataForRelatedItemsRequest
     */
    public function setItemIds($itemIds)
    {
      $this->itemIds = $itemIds;
      return $this;
    }

}
