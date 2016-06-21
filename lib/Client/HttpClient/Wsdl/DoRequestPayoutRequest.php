<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoRequestPayoutRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @param string $sessionId
     */
    public function __construct($sessionId = null)
    {
      $this->sessionId = $sessionId;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoRequestPayoutRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

}
