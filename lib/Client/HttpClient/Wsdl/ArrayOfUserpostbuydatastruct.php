<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserpostbuydatastruct
{

    /**
     * @var UserPostBuyDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserPostBuyDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserPostBuyDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserpostbuydatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
