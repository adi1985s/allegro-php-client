<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class RelatedItemsShipmentDataStruct
{

    /**
     * @var ArrayOfSellershipmentdatastruct $sellerShipmentData
     */
    protected $sellerShipmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSellershipmentdatastruct
     */
    public function getSellerShipmentData()
    {
      return $this->sellerShipmentData;
    }

    /**
     * @param ArrayOfSellershipmentdatastruct $sellerShipmentData
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RelatedItemsShipmentDataStruct
     */
    public function setSellerShipmentData($sellerShipmentData)
    {
      $this->sellerShipmentData = $sellerShipmentData;
      return $this;
    }

}
