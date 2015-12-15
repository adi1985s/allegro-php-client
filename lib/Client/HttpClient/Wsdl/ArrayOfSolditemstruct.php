<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSolditemstruct
{

    /**
     * @var SoldItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SoldItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SoldItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSolditemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
