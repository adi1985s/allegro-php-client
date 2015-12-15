<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class FilterOptionsType
{

    /**
     * @var string $filterId
     */
    protected $filterId = null;

    /**
     * @var ArrayOfString $filterValueId
     */
    protected $filterValueId = null;

    /**
     * @var RangeValueType $filterValueRange
     */
    protected $filterValueRange = null;

    /**
     * @param string $filterId
     */
    public function __construct($filterId = null)
    {
      $this->filterId = $filterId;
    }

    /**
     * @return string
     */
    public function getFilterId()
    {
      return $this->filterId;
    }

    /**
     * @param string $filterId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FilterOptionsType
     */
    public function setFilterId($filterId)
    {
      $this->filterId = $filterId;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFilterValueId()
    {
      return $this->filterValueId;
    }

    /**
     * @param ArrayOfString $filterValueId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FilterOptionsType
     */
    public function setFilterValueId($filterValueId)
    {
      $this->filterValueId = $filterValueId;
      return $this;
    }

    /**
     * @return RangeValueType
     */
    public function getFilterValueRange()
    {
      return $this->filterValueRange;
    }

    /**
     * @param RangeValueType $filterValueRange
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FilterOptionsType
     */
    public function setFilterValueRange($filterValueRange)
    {
      $this->filterValueRange = $filterValueRange;
      return $this;
    }

}
