<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class FilterPriceStruct
{

    /**
     * @var float $filterPriceFrom
     */
    protected $filterPriceFrom = null;

    /**
     * @var float $filterPriceTo
     */
    protected $filterPriceTo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFilterPriceFrom()
    {
      return $this->filterPriceFrom;
    }

    /**
     * @param float $filterPriceFrom
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FilterPriceStruct
     */
    public function setFilterPriceFrom($filterPriceFrom)
    {
      $this->filterPriceFrom = $filterPriceFrom;
      return $this;
    }

    /**
     * @return float
     */
    public function getFilterPriceTo()
    {
      return $this->filterPriceTo;
    }

    /**
     * @param float $filterPriceTo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FilterPriceStruct
     */
    public function setFilterPriceTo($filterPriceTo)
    {
      $this->filterPriceTo = $filterPriceTo;
      return $this;
    }

}
