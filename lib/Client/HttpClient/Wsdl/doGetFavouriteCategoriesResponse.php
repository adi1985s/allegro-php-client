<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetFavouriteCategoriesResponse
{

    /**
     * @var ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     */
    protected $sFavouriteCategoriesList = null;

    /**
     * @param ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     */
    public function __construct($sFavouriteCategoriesList = null)
    {
      $this->sFavouriteCategoriesList = $sFavouriteCategoriesList;
    }

    /**
     * @return ArrayOfFavouritescategoriesstruct
     */
    public function getSFavouriteCategoriesList()
    {
      return $this->sFavouriteCategoriesList;
    }

    /**
     * @param ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetFavouriteCategoriesResponse
     */
    public function setSFavouriteCategoriesList($sFavouriteCategoriesList)
    {
      $this->sFavouriteCategoriesList = $sFavouriteCategoriesList;
      return $this;
    }

}
