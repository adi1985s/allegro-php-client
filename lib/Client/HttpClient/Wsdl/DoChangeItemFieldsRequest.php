<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoChangeItemFieldsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var ArrayOfFieldsvalue $fieldsToModify
     */
    protected $fieldsToModify = null;

    /**
     * @var ArrayOfInt $fieldsToRemove
     */
    protected $fieldsToRemove = null;

    /**
     * @var int $previewOnly
     */
    protected $previewOnly = null;

    /**
     * @var ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @var ArrayOfTagnamestruct $tags
     */
    protected $tags = null;

    /**
     * @param string $sessionId
     * @param int $itemId
     * @param ArrayOfFieldsvalue $fieldsToModify
     * @param ArrayOfInt $fieldsToRemove
     * @param int $previewOnly
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     */
    public function __construct($sessionId = null, $itemId = null, $fieldsToModify = null, $fieldsToRemove = null, $previewOnly = null, $variants = null, $tags = null)
    {
      $this->sessionId = $sessionId;
      $this->itemId = $itemId;
      $this->fieldsToModify = $fieldsToModify;
      $this->fieldsToRemove = $fieldsToRemove;
      $this->previewOnly = $previewOnly;
      $this->variants = $variants;
      $this->tags = $tags;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getFieldsToModify()
    {
      return $this->fieldsToModify;
    }

    /**
     * @param ArrayOfFieldsvalue $fieldsToModify
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
     */
    public function setFieldsToModify($fieldsToModify)
    {
      $this->fieldsToModify = $fieldsToModify;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getFieldsToRemove()
    {
      return $this->fieldsToRemove;
    }

    /**
     * @param ArrayOfInt $fieldsToRemove
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
     */
    public function setFieldsToRemove($fieldsToRemove)
    {
      $this->fieldsToRemove = $fieldsToRemove;
      return $this;
    }

    /**
     * @return int
     */
    public function getPreviewOnly()
    {
      return $this->previewOnly;
    }

    /**
     * @param int $previewOnly
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
     */
    public function setPreviewOnly($previewOnly)
    {
      $this->previewOnly = $previewOnly;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoChangeItemFieldsRequest
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

}
