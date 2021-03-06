<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class SellRatingStatsStruct
{

    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var string $sellRatingGroupStats
     */
    protected $sellRatingGroupStats = null;

    /**
     * @param string $sellRatingGroupTitle
     * @param string $sellRatingGroupStats
     */
    public function __construct($sellRatingGroupTitle = null, $sellRatingGroupStats = null)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      $this->sellRatingGroupStats = $sellRatingGroupStats;
    }

    /**
     * @return string
     */
    public function getSellRatingGroupTitle()
    {
      return $this->sellRatingGroupTitle;
    }

    /**
     * @param string $sellRatingGroupTitle
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SellRatingStatsStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellRatingGroupStats()
    {
      return $this->sellRatingGroupStats;
    }

    /**
     * @param string $sellRatingGroupStats
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SellRatingStatsStruct
     */
    public function setSellRatingGroupStats($sellRatingGroupStats)
    {
      $this->sellRatingGroupStats = $sellRatingGroupStats;
      return $this;
    }

}
