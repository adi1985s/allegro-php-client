<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class BidListStruct2
{

    /**
     * @var ArrayOfString $bidsArray
     */
    protected $bidsArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getBidsArray()
    {
      return $this->bidsArray;
    }

    /**
     * @param ArrayOfString $bidsArray
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\BidListStruct2
     */
    public function setBidsArray($bidsArray)
    {
      $this->bidsArray = $bidsArray;
      return $this;
    }

}
