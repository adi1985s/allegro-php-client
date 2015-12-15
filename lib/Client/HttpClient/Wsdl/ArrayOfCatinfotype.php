<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfCatinfotype
{

    /**
     * @var CatInfoType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CatInfoType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CatInfoType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfCatinfotype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
