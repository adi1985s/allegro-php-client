<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class SellRatingReasonSumStruct
{

    /**
     * @var string $sellRatingReasonTitle
     */
    protected $sellRatingReasonTitle = null;

    /**
     * @var int $sellRatingReasonCount
     */
    protected $sellRatingReasonCount = null;

    /**
     * @param string $sellRatingReasonTitle
     * @param int $sellRatingReasonCount
     */
    public function __construct($sellRatingReasonTitle = null, $sellRatingReasonCount = null)
    {
      $this->sellRatingReasonTitle = $sellRatingReasonTitle;
      $this->sellRatingReasonCount = $sellRatingReasonCount;
    }

    /**
     * @return string
     */
    public function getSellRatingReasonTitle()
    {
      return $this->sellRatingReasonTitle;
    }

    /**
     * @param string $sellRatingReasonTitle
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SellRatingReasonSumStruct
     */
    public function setSellRatingReasonTitle($sellRatingReasonTitle)
    {
      $this->sellRatingReasonTitle = $sellRatingReasonTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellRatingReasonCount()
    {
      return $this->sellRatingReasonCount;
    }

    /**
     * @param int $sellRatingReasonCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SellRatingReasonSumStruct
     */
    public function setSellRatingReasonCount($sellRatingReasonCount)
    {
      $this->sellRatingReasonCount = $sellRatingReasonCount;
      return $this;
    }

}
