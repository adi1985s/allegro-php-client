<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class RemovedItemTemplatesStruct
{

    /**
     * @var ArrayOfInt $itemTemplateIds
     */
    protected $itemTemplateIds = null;

    /**
     * @var ArrayOfInt $itemTemplateIncorrectIds
     */
    protected $itemTemplateIncorrectIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfInt
     */
    public function getItemTemplateIds()
    {
      return $this->itemTemplateIds;
    }

    /**
     * @param ArrayOfInt $itemTemplateIds
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RemovedItemTemplatesStruct
     */
    public function setItemTemplateIds($itemTemplateIds)
    {
      $this->itemTemplateIds = $itemTemplateIds;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getItemTemplateIncorrectIds()
    {
      return $this->itemTemplateIncorrectIds;
    }

    /**
     * @param ArrayOfInt $itemTemplateIncorrectIds
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\RemovedItemTemplatesStruct
     */
    public function setItemTemplateIncorrectIds($itemTemplateIncorrectIds)
    {
      $this->itemTemplateIncorrectIds = $itemTemplateIncorrectIds;
      return $this;
    }

}
