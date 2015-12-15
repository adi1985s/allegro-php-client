<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellratinginfostruct
{

    /**
     * @var SellRatingInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellRatingInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellRatingInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellratinginfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
