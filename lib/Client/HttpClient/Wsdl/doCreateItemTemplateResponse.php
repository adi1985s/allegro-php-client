<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doCreateItemTemplateResponse
{

    /**
     * @var CreatedItemTemplateStruct $createdItemTemplate
     */
    protected $createdItemTemplate = null;

    /**
     * @param CreatedItemTemplateStruct $createdItemTemplate
     */
    public function __construct($createdItemTemplate = null)
    {
      $this->createdItemTemplate = $createdItemTemplate;
    }

    /**
     * @return CreatedItemTemplateStruct
     */
    public function getCreatedItemTemplate()
    {
      return $this->createdItemTemplate;
    }

    /**
     * @param CreatedItemTemplateStruct $createdItemTemplate
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doCreateItemTemplateResponse
     */
    public function setCreatedItemTemplate($createdItemTemplate)
    {
      $this->createdItemTemplate = $createdItemTemplate;
      return $this;
    }

}
