<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoGetSiteJournalRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $startingPoint
     */
    protected $startingPoint = null;

    /**
     * @var int $infoType
     */
    protected $infoType = null;

    /**
     * @param string $sessionHandle
     * @param int $startingPoint
     * @param int $infoType
     */
    public function __construct($sessionHandle = null, $startingPoint = null, $infoType = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->startingPoint = $startingPoint;
      $this->infoType = $infoType;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetSiteJournalRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartingPoint()
    {
      return $this->startingPoint;
    }

    /**
     * @param int $startingPoint
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetSiteJournalRequest
     */
    public function setStartingPoint($startingPoint)
    {
      $this->startingPoint = $startingPoint;
      return $this;
    }

    /**
     * @return int
     */
    public function getInfoType()
    {
      return $this->infoType;
    }

    /**
     * @param int $infoType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetSiteJournalRequest
     */
    public function setInfoType($infoType)
    {
      $this->infoType = $infoType;
      return $this;
    }

}
