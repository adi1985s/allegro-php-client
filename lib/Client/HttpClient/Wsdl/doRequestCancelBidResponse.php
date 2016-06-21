<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doRequestCancelBidResponse
{

    /**
     * @var int $requestValue
     */
    protected $requestValue = null;

    /**
     * @param int $requestValue
     */
    public function __construct($requestValue = null)
    {
      $this->requestValue = $requestValue;
    }

    /**
     * @return int
     */
    public function getRequestValue()
    {
      return $this->requestValue;
    }

    /**
     * @param int $requestValue
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doRequestCancelBidResponse
     */
    public function setRequestValue($requestValue)
    {
      $this->requestValue = $requestValue;
      return $this;
    }

}
