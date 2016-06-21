<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doCancelTransactionResponse
{

    /**
     * @var int $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param int $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return int
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param int $cancellationResult
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doCancelTransactionResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
