<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class CreatedItemTemplateStruct
{

    /**
     * @var int $itemTemplateId
     */
    protected $itemTemplateId = null;

    /**
     * @param int $itemTemplateId
     */
    public function __construct($itemTemplateId = null)
    {
      $this->itemTemplateId = $itemTemplateId;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\CreatedItemTemplateStruct
     */
    public function setItemTemplateId($itemTemplateId)
    {
      $this->itemTemplateId = $itemTemplateId;
      return $this;
    }

}
