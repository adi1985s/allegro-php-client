<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class FavouritesSellersStruct
{

    /**
     * @var int $sFavUserId
     */
    protected $sFavUserId = null;

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
     * @param int $sFavUserId
     * @param int $sSubscriptionStatus
     * @param int $sPosition
     * @param int $sBuyNowOnly
     */
    public function __construct($sFavUserId = null, $sSubscriptionStatus = null, $sPosition = null, $sBuyNowOnly = null)
    {
      $this->sFavUserId = $sFavUserId;
      $this->sSubscriptionStatus = $sSubscriptionStatus;
      $this->sPosition = $sPosition;
      $this->sBuyNowOnly = $sBuyNowOnly;
    }

    /**
     * @return int
     */
    public function getSFavUserId()
    {
      return $this->sFavUserId;
    }

    /**
     * @param int $sFavUserId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesSellersStruct
     */
    public function setSFavUserId($sFavUserId)
    {
      $this->sFavUserId = $sFavUserId;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesSellersStruct
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesSellersStruct
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\FavouritesSellersStruct
     */
    public function setSBuyNowOnly($sBuyNowOnly)
    {
      $this->sBuyNowOnly = $sBuyNowOnly;
      return $this;
    }

}
