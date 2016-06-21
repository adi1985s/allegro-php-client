<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemTemplateListStruct
{

    /**
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @var string $itemTemplateName
     */
    protected $itemTemplateName = null;

    /**
     * @var ArrayOfFieldsvalue $itemTemplateFields
     */
    protected $itemTemplateFields = null;

    /**
     * @param int $itemTemplateId
     * @param string $itemTemplateName
     */
    public function __construct($itemTemplateId = null, $itemTemplateName = null)
    {
      $this->itemTemplateId = $itemTemplateId;
      $this->itemTemplateName = $itemTemplateName;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemTemplateListStruct
     */
    public function setItemTemplateId($itemTemplateId)
    {
      $this->itemTemplateId = $itemTemplateId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTemplateName()
    {
      return $this->itemTemplateName;
    }

    /**
     * @param string $itemTemplateName
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemTemplateListStruct
     */
    public function setItemTemplateName($itemTemplateName)
    {
      $this->itemTemplateName = $itemTemplateName;
      return $this;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getItemTemplateFields()
    {
      return $this->itemTemplateFields;
    }

    /**
     * @param ArrayOfFieldsvalue $itemTemplateFields
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemTemplateListStruct
     */
    public function setItemTemplateFields($itemTemplateFields)
    {
      $this->itemTemplateFields = $itemTemplateFields;
      return $this;
    }

}
