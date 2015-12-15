<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetFreeDeliveryAmountResponse
{

    /**
     * @var float $freeDeliveryAmount
     */
    protected $freeDeliveryAmount = null;

    /**
     * @var int $activeFlag
     */
    protected $activeFlag = null;

    /**
     * @param float $freeDeliveryAmount
     * @param int $activeFlag
     */
    public function __construct($freeDeliveryAmount = null, $activeFlag = null)
    {
      $this->freeDeliveryAmount = $freeDeliveryAmount;
      $this->activeFlag = $activeFlag;
    }

    /**
     * @return float
     */
    public function getFreeDeliveryAmount()
    {
      return $this->freeDeliveryAmount;
    }

    /**
     * @param float $freeDeliveryAmount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetFreeDeliveryAmountResponse
     */
    public function setFreeDeliveryAmount($freeDeliveryAmount)
    {
      $this->freeDeliveryAmount = $freeDeliveryAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getActiveFlag()
    {
      return $this->activeFlag;
    }

    /**
     * @param int $activeFlag
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetFreeDeliveryAmountResponse
     */
    public function setActiveFlag($activeFlag)
    {
      $this->activeFlag = $activeFlag;
      return $this;
    }

}
