<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFilteroptionstype
{

    /**
     * @var FilterOptionsType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FilterOptionsType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FilterOptionsType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFilteroptionstype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
