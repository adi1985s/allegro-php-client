<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetShopsTagsResponse
{

    /**
     * @var int $shopsTagsCount
     */
    protected $shopsTagsCount = null;

    /**
     * @var ArrayOfShopstagtypestruct $shopsTags
     */
    protected $shopsTags = null;

    /**
     * @param int $shopsTagsCount
     * @param ArrayOfShopstagtypestruct $shopsTags
     */
    public function __construct($shopsTagsCount = null, $shopsTags = null)
    {
      $this->shopsTagsCount = $shopsTagsCount;
      $this->shopsTags = $shopsTags;
    }

    /**
     * @return int
     */
    public function getShopsTagsCount()
    {
      return $this->shopsTagsCount;
    }

    /**
     * @param int $shopsTagsCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetShopsTagsResponse
     */
    public function setShopsTagsCount($shopsTagsCount)
    {
      $this->shopsTagsCount = $shopsTagsCount;
      return $this;
    }

    /**
     * @return ArrayOfShopstagtypestruct
     */
    public function getShopsTags()
    {
      return $this->shopsTags;
    }

    /**
     * @param ArrayOfShopstagtypestruct $shopsTags
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetShopsTagsResponse
     */
    public function setShopsTags($shopsTags)
    {
      $this->shopsTags = $shopsTags;
      return $this;
    }

}
