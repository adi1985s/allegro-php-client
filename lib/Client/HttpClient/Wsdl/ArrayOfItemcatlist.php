<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemcatlist
{

    /**
     * @var ItemCatList[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemCatList[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemCatList[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemcatlist
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
