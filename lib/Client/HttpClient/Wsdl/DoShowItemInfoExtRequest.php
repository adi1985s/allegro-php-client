<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoShowItemInfoExtRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $getDesc
     */
    protected $getDesc = null;

    /**
     * @var int $getImageUrl
     */
    protected $getImageUrl = null;

    /**
     * @var int $getAttribs
     */
    protected $getAttribs = null;

    /**
     * @var int $getPostageOptions
     */
    protected $getPostageOptions = null;

    /**
     * @var int $getCompanyInfo
     */
    protected $getCompanyInfo = null;

    /**
     * @var int $getProductInfo
     */
    protected $getProductInfo = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param int $getDesc
     * @param int $getImageUrl
     * @param int $getAttribs
     * @param int $getPostageOptions
     * @param int $getCompanyInfo
     * @param int $getProductInfo
     */
    public function __construct($sessionHandle = null, $itemId = null, $getDesc = null, $getImageUrl = null, $getAttribs = null, $getPostageOptions = null, $getCompanyInfo = null, $getProductInfo = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->getDesc = $getDesc;
      $this->getImageUrl = $getImageUrl;
      $this->getAttribs = $getAttribs;
      $this->getPostageOptions = $getPostageOptions;
      $this->getCompanyInfo = $getCompanyInfo;
      $this->getProductInfo = $getProductInfo;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetDesc()
    {
      return $this->getDesc;
    }

    /**
     * @param int $getDesc
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetDesc($getDesc)
    {
      $this->getDesc = $getDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetImageUrl()
    {
      return $this->getImageUrl;
    }

    /**
     * @param int $getImageUrl
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetImageUrl($getImageUrl)
    {
      $this->getImageUrl = $getImageUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetAttribs()
    {
      return $this->getAttribs;
    }

    /**
     * @param int $getAttribs
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetAttribs($getAttribs)
    {
      $this->getAttribs = $getAttribs;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetPostageOptions()
    {
      return $this->getPostageOptions;
    }

    /**
     * @param int $getPostageOptions
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetPostageOptions($getPostageOptions)
    {
      $this->getPostageOptions = $getPostageOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetCompanyInfo()
    {
      return $this->getCompanyInfo;
    }

    /**
     * @param int $getCompanyInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetCompanyInfo($getCompanyInfo)
    {
      $this->getCompanyInfo = $getCompanyInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetProductInfo()
    {
      return $this->getProductInfo;
    }

    /**
     * @param int $getProductInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetProductInfo($getProductInfo)
    {
      $this->getProductInfo = $getProductInfo;
      return $this;
    }

}
