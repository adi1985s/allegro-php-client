<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfNewpostbuyformsellerstruct
{

    /**
     * @var NewPostBuyFormSellerStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NewPostBuyFormSellerStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param NewPostBuyFormSellerStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfNewpostbuyformsellerstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
