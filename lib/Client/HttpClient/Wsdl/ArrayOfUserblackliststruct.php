<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserblackliststruct
{

    /**
     * @var UserBlackListStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserBlackListStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserBlackListStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserblackliststruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
