<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doRemoveFromWatchListResponse
{

    /**
     * @var ArrayOfItemremovewatchstruct $watchListResult
     */
    protected $watchListResult = null;

    /**
     * @param ArrayOfItemremovewatchstruct $watchListResult
     */
    public function __construct($watchListResult = null)
    {
      $this->watchListResult = $watchListResult;
    }

    /**
     * @return ArrayOfItemremovewatchstruct
     */
    public function getWatchListResult()
    {
      return $this->watchListResult;
    }

    /**
     * @param ArrayOfItemremovewatchstruct $watchListResult
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doRemoveFromWatchListResponse
     */
    public function setWatchListResult($watchListResult)
    {
      $this->watchListResult = $watchListResult;
      return $this;
    }

}
