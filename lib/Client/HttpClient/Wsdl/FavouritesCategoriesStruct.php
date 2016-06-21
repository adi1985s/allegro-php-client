<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class FavouritesCategoriesStruct
{

    /**
     * @var int $sCategoryId
     */
    protected $sCategoryId = null;

    /**
     * @var int $sSubscriptionStatus
     */
    protected $sSubscriptionStatus = null;

    /**
     * @var int $sPosition
     */
    protected $sPosition = null;

    /**
     * @var int $sBuyNowOnly
     */
    protected $sBuyNowOnly = null;

    /**
     * @param int $sCategoryId
     * @param int $sSubscriptionStatus
     * @param int $sPosition
     * @param int $sBuyNowOnly
     */
    public function __construct($sCategoryId = null, $sSubscriptionStatus = null, $sPosition = null, $sBuyNowOnly = null)
    {
      $this->sCategoryId = $sCategoryId;
      $this->sSubscriptionStatus = $sSubscriptionStatus;
      $this->sPosition = $sPosition;
      $this->sBuyNowOnly = $sBuyNowOnly;
    }

    /**
     * @return int
     */
    public function getSCategoryId()
    {
      return $this->sCategoryId;
    }

    /**
     * @param int $sCategoryId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesCategoriesStruct
     */
    public function setSCategoryId($sCategoryId)
    {
      $this->sCategoryId = $sCategoryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSSubscriptionStatus()
    {
      return $this->sSubscriptionStatus;
    }

    /**
     * @param int $sSubscriptionStatus
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesCategoriesStruct
     */
    public function setSSubscriptionStatus($sSubscriptionStatus)
    {
      $this->sSubscriptionStatus = $sSubscriptionStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getSPosition()
    {
      return $this->sPosition;
    }

    /**
     * @param int $sPosition
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesCategoriesStruct
     */
    public function setSPosition($sPosition)
    {
      $this->sPosition = $sPosition;
      return $this;
    }

    /**
     * @return int
     */
    public function getSBuyNowOnly()
    {
      return $this->sBuyNowOnly;
    }

    /**
     * @param int $sBuyNowOnly
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesCategoriesStruct
     */
    public function setSBuyNowOnly($sBuyNowOnly)
    {
      $this->sBuyNowOnly = $sBuyNowOnly;
      return $this;
    }

}
