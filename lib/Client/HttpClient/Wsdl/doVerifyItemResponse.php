<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doVerifyItemResponse
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $itemListed
     */
    protected $itemListed = null;

    /**
     * @var int $itemStartingTime
     */
    protected $itemStartingTime = null;

    /**
     * @param int $itemId
     * @param int $itemListed
     * @param int $itemStartingTime
     */
    public function __construct($itemId = null, $itemListed = null, $itemStartingTime = null)
    {
      $this->itemId = $itemId;
      $this->itemListed = $itemListed;
      $this->itemStartingTime = $itemStartingTime;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doVerifyItemResponse
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemListed()
    {
      return $this->itemListed;
    }

    /**
     * @param int $itemListed
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doVerifyItemResponse
     */
    public function setItemListed($itemListed)
    {
      $this->itemListed = $itemListed;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemStartingTime()
    {
      return $this->itemStartingTime;
    }

    /**
     * @param int $itemStartingTime
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doVerifyItemResponse
     */
    public function setItemStartingTime($itemStartingTime)
    {
      $this->itemStartingTime = $itemStartingTime;
      return $this;
    }

}
