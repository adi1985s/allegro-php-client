<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doAddToBlackListResponse
{

    /**
     * @var ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    protected $userBlackListResultsArr = null;

    /**
     * @param ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    public function __construct($userBlackListResultsArr = null)
    {
      $this->userBlackListResultsArr = $userBlackListResultsArr;
    }

    /**
     * @return ArrayOfUserblacklistaddresultstruct
     */
    public function getUserBlackListResultsArr()
    {
      return $this->userBlackListResultsArr;
    }

    /**
     * @param ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doAddToBlackListResponse
     */
    public function setUserBlackListResultsArr($userBlackListResultsArr)
    {
      $this->userBlackListResultsArr = $userBlackListResultsArr;
      return $this;
    }

}
