<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoGetItemTemplatesRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfInt $itemTemplateIds
     */
    protected $itemTemplateIds = null;

    /**
     * @param string $sessionId
     * @param ArrayOfInt $itemTemplateIds
     */
    public function __construct($sessionId = null, $itemTemplateIds = null)
    {
      $this->sessionId = $sessionId;
      $this->itemTemplateIds = $itemTemplateIds;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetItemTemplatesRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetItemTemplatesRequest
     */
    public function setItemTemplateIds($itemTemplateIds)
    {
      $this->itemTemplateIds = $itemTemplateIds;
      return $this;
    }

}
