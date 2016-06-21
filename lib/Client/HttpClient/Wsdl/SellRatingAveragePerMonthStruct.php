<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class SellRatingAveragePerMonthStruct
{

    /**
     * @var string $sellRatingMonth
     */
    protected $sellRatingMonth = null;

    /**
     * @var ArrayOfSellratingstatsstruct $sellRatingAverageValues
     */
    protected $sellRatingAverageValues = null;

    /**
     * @param string $sellRatingMonth
     */
    public function __construct($sellRatingMonth = null)
    {
      $this->sellRatingMonth = $sellRatingMonth;
    }

    /**
     * @return string
     */
    public function getSellRatingMonth()
    {
      return $this->sellRatingMonth;
    }

    /**
     * @param string $sellRatingMonth
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SellRatingAveragePerMonthStruct
     */
    public function setSellRatingMonth($sellRatingMonth)
    {
      $this->sellRatingMonth = $sellRatingMonth;
      return $this;
    }

    /**
     * @return ArrayOfSellratingstatsstruct
     */
    public function getSellRatingAverageValues()
    {
      return $this->sellRatingAverageValues;
    }

    /**
     * @param ArrayOfSellratingstatsstruct $sellRatingAverageValues
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\SellRatingAveragePerMonthStruct
     */
    public function setSellRatingAverageValues($sellRatingAverageValues)
    {
      $this->sellRatingAverageValues = $sellRatingAverageValues;
      return $this;
    }

}
