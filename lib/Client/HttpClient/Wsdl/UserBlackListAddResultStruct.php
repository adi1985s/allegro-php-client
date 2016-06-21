<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class UserBlackListAddResultStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $addToBlackListResult
     */
    protected $addToBlackListResult = null;

    /**
     * @var string $addToBlackListErrCode
     */
    protected $addToBlackListErrCode = null;

    /**
     * @var string $addToBlackListErrMsg
     */
    protected $addToBlackListErrMsg = null;

    /**
     * @param int $userId
     * @param int $addToBlackListResult
     * @param string $addToBlackListErrCode
     * @param string $addToBlackListErrMsg
     */
    public function __construct($userId = null, $addToBlackListResult = null, $addToBlackListErrCode = null, $addToBlackListErrMsg = null)
    {
      $this->userId = $userId;
      $this->addToBlackListResult = $addToBlackListResult;
      $this->addToBlackListErrCode = $addToBlackListErrCode;
      $this->addToBlackListErrMsg = $addToBlackListErrMsg;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\UserBlackListAddResultStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAddToBlackListResult()
    {
      return $this->addToBlackListResult;
    }

    /**
     * @param int $addToBlackListResult
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\UserBlackListAddResultStruct
     */
    public function setAddToBlackListResult($addToBlackListResult)
    {
      $this->addToBlackListResult = $addToBlackListResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddToBlackListErrCode()
    {
      return $this->addToBlackListErrCode;
    }

    /**
     * @param string $addToBlackListErrCode
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\UserBlackListAddResultStruct
     */
    public function setAddToBlackListErrCode($addToBlackListErrCode)
    {
      $this->addToBlackListErrCode = $addToBlackListErrCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddToBlackListErrMsg()
    {
      return $this->addToBlackListErrMsg;
    }

    /**
     * @param string $addToBlackListErrMsg
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\UserBlackListAddResultStruct
     */
    public function setAddToBlackListErrMsg($addToBlackListErrMsg)
    {
      $this->addToBlackListErrMsg = $addToBlackListErrMsg;
      return $this;
    }

}
