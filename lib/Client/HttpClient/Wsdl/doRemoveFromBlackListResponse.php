<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doRemoveFromBlackListResponse
{

    /**
     * @var ArrayOfBlacklistresstruct $blackListResult
     */
    protected $blackListResult = null;

    /**
     * @param ArrayOfBlacklistresstruct $blackListResult
     */
    public function __construct($blackListResult = null)
    {
      $this->blackListResult = $blackListResult;
    }

    /**
     * @return ArrayOfBlacklistresstruct
     */
    public function getBlackListResult()
    {
      return $this->blackListResult;
    }

    /**
     * @param ArrayOfBlacklistresstruct $blackListResult
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doRemoveFromBlackListResponse
     */
    public function setBlackListResult($blackListResult)
    {
      $this->blackListResult = $blackListResult;
      return $this;
    }

}
