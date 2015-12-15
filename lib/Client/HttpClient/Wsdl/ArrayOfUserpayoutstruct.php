<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserpayoutstruct
{

    /**
     * @var UserPayoutStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserPayoutStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserPayoutStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserpayoutstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
