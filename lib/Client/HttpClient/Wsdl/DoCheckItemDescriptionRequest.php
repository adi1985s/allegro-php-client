<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoCheckItemDescriptionRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $descriptionContent
     */
    protected $descriptionContent = null;

    /**
     * @param string $sessionId
     * @param string $descriptionContent
     */
    public function __construct($sessionId = null, $descriptionContent = null)
    {
      $this->sessionId = $sessionId;
      $this->descriptionContent = $descriptionContent;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCheckItemDescriptionRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionContent()
    {
      return $this->descriptionContent;
    }

    /**
     * @param string $descriptionContent
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCheckItemDescriptionRequest
     */
    public function setDescriptionContent($descriptionContent)
    {
      $this->descriptionContent = $descriptionContent;
      return $this;
    }

}
