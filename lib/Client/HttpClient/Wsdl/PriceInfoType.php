<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class PriceInfoType
{

    /**
     * @var string $priceType
     */
    protected $priceType = null;

    /**
     * @var float $priceValue
     */
    protected $priceValue = null;

    /**
     * @param string $priceType
     * @param float $priceValue
     */
    public function __construct($priceType = null, $priceValue = null)
    {
      $this->priceType = $priceType;
      $this->priceValue = $priceValue;
    }

    /**
     * @return string
     */
    public function getPriceType()
    {
      return $this->priceType;
    }

    /**
     * @param string $priceType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PriceInfoType
     */
    public function setPriceType($priceType)
    {
      $this->priceType = $priceType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceValue()
    {
      return $this->priceValue;
    }

    /**
     * @param float $priceValue
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PriceInfoType
     */
    public function setPriceValue($priceValue)
    {
      $this->priceValue = $priceValue;
      return $this;
    }

}
