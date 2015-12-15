<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserblacklistaddresultstruct
{

    /**
     * @var UserBlackListAddResultStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserBlackListAddResultStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserBlackListAddResultStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserblacklistaddresultstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
