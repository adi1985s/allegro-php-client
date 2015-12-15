<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetFavouriteSellersResponse
{

    /**
     * @var ArrayOfFavouritessellersstruct $sFavouriteSellersList
     */
    protected $sFavouriteSellersList = null;

    /**
     * @param ArrayOfFavouritessellersstruct $sFavouriteSellersList
     */
    public function __construct($sFavouriteSellersList = null)
    {
      $this->sFavouriteSellersList = $sFavouriteSellersList;
    }

    /**
     * @return ArrayOfFavouritessellersstruct
     */
    public function getSFavouriteSellersList()
    {
      return $this->sFavouriteSellersList;
    }

    /**
     * @param ArrayOfFavouritessellersstruct $sFavouriteSellersList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetFavouriteSellersResponse
     */
    public function setSFavouriteSellersList($sFavouriteSellersList)
    {
      $this->sFavouriteSellersList = $sFavouriteSellersList;
      return $this;
    }

}
