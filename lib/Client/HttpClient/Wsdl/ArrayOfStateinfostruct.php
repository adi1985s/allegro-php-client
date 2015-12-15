<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfStateinfostruct
{

    /**
     * @var StateInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StateInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param StateInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfStateinfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
