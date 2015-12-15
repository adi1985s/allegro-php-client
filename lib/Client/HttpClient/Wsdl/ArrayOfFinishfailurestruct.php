<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFinishfailurestruct
{

    /**
     * @var FinishFailureStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FinishFailureStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FinishFailureStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFinishfailurestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
