<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class RangeFloatValueStruct
{

    /**
     * @var float $fvalueRangeFloatMin
     */
    protected $fvalueRangeFloatMin = null;

    /**
     * @var float $fvalueRangeFloatMax
     */
    protected $fvalueRangeFloatMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMin()
    {
      return $this->fvalueRangeFloatMin;
    }

    /**
     * @param float $fvalueRangeFloatMin
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMin($fvalueRangeFloatMin)
    {
      $this->fvalueRangeFloatMin = $fvalueRangeFloatMin;
      return $this;
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMax()
    {
      return $this->fvalueRangeFloatMax;
    }

    /**
     * @param float $fvalueRangeFloatMax
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMax($fvalueRangeFloatMax)
    {
      $this->fvalueRangeFloatMax = $fvalueRangeFloatMax;
      return $this;
    }

}
