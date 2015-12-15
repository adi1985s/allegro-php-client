<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfParameterinfotype
{

    /**
     * @var ParameterInfoType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ParameterInfoType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ParameterInfoType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfParameterinfotype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
