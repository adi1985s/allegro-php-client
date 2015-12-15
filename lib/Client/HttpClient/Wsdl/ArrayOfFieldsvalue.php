<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFieldsvalue
{

    /**
     * @var FieldsValue[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldsValue[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FieldsValue[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFieldsvalue
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
