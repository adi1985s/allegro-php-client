<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetItemTemplatesResponse
{

    /**
     * @var ItemTemplatesStruct $itemTemplates
     */
    protected $itemTemplates = null;

    /**
     * @param ItemTemplatesStruct $itemTemplates
     */
    public function __construct($itemTemplates = null)
    {
      $this->itemTemplates = $itemTemplates;
    }

    /**
     * @return ItemTemplatesStruct
     */
    public function getItemTemplates()
    {
      return $this->itemTemplates;
    }

    /**
     * @param ItemTemplatesStruct $itemTemplates
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetItemTemplatesResponse
     */
    public function setItemTemplates($itemTemplates)
    {
      $this->itemTemplates = $itemTemplates;
      return $this;
    }

}
