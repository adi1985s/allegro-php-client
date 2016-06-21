<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doCancelRefundWarningResponse
{

    /**
     * @var boolean $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param boolean $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return boolean
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param boolean $cancellationResult
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doCancelRefundWarningResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
