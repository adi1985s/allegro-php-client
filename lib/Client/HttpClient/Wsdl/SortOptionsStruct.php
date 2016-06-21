<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class SortOptionsStruct
{

    /**
     * @var int $sortType
     */
    protected $sortType = null;

    /**
     * @var int $sortOrder
     */
    protected $sortOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSortType()
    {
      return $this->sortType;
    }

    /**
     * @param int $sortType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SortOptionsStruct
     */
    public function setSortType($sortType)
    {
      $this->sortType = $sortType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param int $sortOrder
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SortOptionsStruct
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
