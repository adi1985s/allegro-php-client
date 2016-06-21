<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class RangeIntValueStruct
{

    /**
     * @var int $fvalueRangeIntMin
     */
    protected $fvalueRangeIntMin = null;

    /**
     * @var int $fvalueRangeIntMax
     */
    protected $fvalueRangeIntMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFvalueRangeIntMin()
    {
      return $this->fvalueRangeIntMin;
    }

    /**
     * @param int $fvalueRangeIntMin
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RangeIntValueStruct
     */
    public function setFvalueRangeIntMin($fvalueRangeIntMin)
    {
      $this->fvalueRangeIntMin = $fvalueRangeIntMin;
      return $this;
    }

    /**
     * @return int
     */
    public function getFvalueRangeIntMax()
    {
      return $this->fvalueRangeIntMax;
    }

    /**
     * @param int $fvalueRangeIntMax
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RangeIntValueStruct
     */
    public function setFvalueRangeIntMax($fvalueRangeIntMax)
    {
      $this->fvalueRangeIntMax = $fvalueRangeIntMax;
      return $this;
    }

}
