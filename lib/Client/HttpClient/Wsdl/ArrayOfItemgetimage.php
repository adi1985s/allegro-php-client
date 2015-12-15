<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemgetimage
{

    /**
     * @var ItemGetImage[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemGetImage[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemGetImage[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemgetimage
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
