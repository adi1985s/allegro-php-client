<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class FutureFilterOptionsStruct
{

    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFilterFormat()
    {
      return $this->filterFormat;
    }

    /**
     * @param int $filterFormat
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FutureFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
      $this->filterFormat = $filterFormat;
      return $this;
    }

}
