<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPaymentsellersstruct
{

    /**
     * @var PaymentSellersStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentSellersStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PaymentSellersStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPaymentsellersstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
