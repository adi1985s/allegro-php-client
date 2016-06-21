<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoCheckNewAuctionExtRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfFieldsvalue $fields
     */
    protected $fields = null;

    /**
     * @var ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @var ArrayOfTagnamestruct $tags
     */
    protected $tags = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfFieldsvalue $fields
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     */
    public function __construct($sessionHandle = null, $fields = null, $variants = null, $tags = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->fields = $fields;
      $this->variants = $variants;
      $this->tags = $tags;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param ArrayOfFieldsvalue $fields
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return ArrayOfVariantstruct
     */
    public function getVariants()
    {
      return $this->variants;
    }

    /**
     * @param ArrayOfVariantstruct $variants
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setVariants($variants)
    {
      $this->variants = $variants;
      return $this;
    }

    /**
     * @return ArrayOfTagnamestruct
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param ArrayOfTagnamestruct $tags
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

}
