<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFinishitemsstruct
{

    /**
     * @var FinishItemsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FinishItemsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FinishItemsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFinishitemsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
