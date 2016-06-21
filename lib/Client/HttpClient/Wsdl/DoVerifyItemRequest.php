<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoVerifyItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $localId
     */
    protected $localId = null;

    /**
     * @param string $sessionHandle
     * @param int $localId
     */
    public function __construct($sessionHandle = null, $localId = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->localId = $localId;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoVerifyItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoVerifyItemRequest
     */
    public function setLocalId($localId)
    {
      $this->localId = $localId;
      return $this;
    }

}
