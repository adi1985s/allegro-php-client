<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doAddToWatchListResponse
{

    /**
     * @var WatchListInfoStruct $watchListInfo
     */
    protected $watchListInfo = null;

    /**
     * @param WatchListInfoStruct $watchListInfo
     */
    public function __construct($watchListInfo = null)
    {
      $this->watchListInfo = $watchListInfo;
    }

    /**
     * @return WatchListInfoStruct
     */
    public function getWatchListInfo()
    {
      return $this->watchListInfo;
    }

    /**
     * @param WatchListInfoStruct $watchListInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doAddToWatchListResponse
     */
    public function setWatchListInfo($watchListInfo)
    {
      $this->watchListInfo = $watchListInfo;
      return $this;
    }

}
