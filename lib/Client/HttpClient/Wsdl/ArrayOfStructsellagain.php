<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfStructsellagain
{

    /**
     * @var StructSellAgain[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StructSellAgain[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param StructSellAgain[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfStructsellagain
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
