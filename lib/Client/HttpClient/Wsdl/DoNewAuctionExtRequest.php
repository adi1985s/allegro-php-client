<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoNewAuctionExtRequest
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
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @var int $localId
     */
    protected $localId = null;

    /**
     * @var ItemTemplateCreateStruct $itemTemplateCreate
     */
    protected $itemTemplateCreate = null;

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
     * @param int $itemTemplateId
     * @param int $localId
     * @param ItemTemplateCreateStruct $itemTemplateCreate
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     */
    public function __construct($sessionHandle = null, $fields = null, $itemTemplateId = null, $localId = null, $itemTemplateCreate = null, $variants = null, $tags = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->fields = $fields;
      $this->itemTemplateId = $itemTemplateId;
      $this->localId = $localId;
      $this->itemTemplateCreate = $itemTemplateCreate;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemTemplateId()
    {
      return $this->itemTemplateId;
    }

    /**
     * @param int $itemTemplateId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
     */
    public function setItemTemplateId($itemTemplateId)
    {
      $this->itemTemplateId = $itemTemplateId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalId()
    {
      return $this->localId;
    }

    /**
     * @param int $localId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
     */
    public function setLocalId($localId)
    {
      $this->localId = $localId;
      return $this;
    }

    /**
     * @return ItemTemplateCreateStruct
     */
    public function getItemTemplateCreate()
    {
      return $this->itemTemplateCreate;
    }

    /**
     * @param ItemTemplateCreateStruct $itemTemplateCreate
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
     */
    public function setItemTemplateCreate($itemTemplateCreate)
    {
      $this->itemTemplateCreate = $itemTemplateCreate;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoNewAuctionExtRequest
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

}
