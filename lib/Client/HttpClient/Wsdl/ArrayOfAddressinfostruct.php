<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfAddressinfostruct
{

    /**
     * @var AddressInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AddressInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param AddressInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfAddressinfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
