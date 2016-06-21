<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemsNotAddedStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemErrorCode
     */
    protected $itemErrorCode = null;

    /**
     * @var string $itemErrorDescription
     */
    protected $itemErrorDescription = null;

    /**
     * @param int $itemId
     * @param string $itemErrorCode
     * @param string $itemErrorDescription
     */
    public function __construct($itemId = null, $itemErrorCode = null, $itemErrorDescription = null)
    {
      $this->itemId = $itemId;
      $this->itemErrorCode = $itemErrorCode;
      $this->itemErrorDescription = $itemErrorDescription;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemsNotAddedStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemErrorCode()
    {
      return $this->itemErrorCode;
    }

    /**
     * @param string $itemErrorCode
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemsNotAddedStruct
     */
    public function setItemErrorCode($itemErrorCode)
    {
      $this->itemErrorCode = $itemErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemErrorDescription()
    {
      return $this->itemErrorDescription;
    }

    /**
     * @param string $itemErrorDescription
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemsNotAddedStruct
     */
    public function setItemErrorDescription($itemErrorDescription)
    {
      $this->itemErrorDescription = $itemErrorDescription;
      return $this;
    }

}
