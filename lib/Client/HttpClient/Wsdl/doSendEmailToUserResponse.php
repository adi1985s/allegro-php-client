<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doSendEmailToUserResponse
{

    /**
     * @var int $mailToUserReceiverId
     */
    protected $mailToUserReceiverId = null;

    /**
     * @var string $mailToUserResult
     */
    protected $mailToUserResult = null;

    /**
     * @param int $mailToUserReceiverId
     * @param string $mailToUserResult
     */
    public function __construct($mailToUserReceiverId = null, $mailToUserResult = null)
    {
      $this->mailToUserReceiverId = $mailToUserReceiverId;
      $this->mailToUserResult = $mailToUserResult;
    }

    /**
     * @return int
     */
    public function getMailToUserReceiverId()
    {
      return $this->mailToUserReceiverId;
    }

    /**
     * @param int $mailToUserReceiverId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doSendEmailToUserResponse
     */
    public function setMailToUserReceiverId($mailToUserReceiverId)
    {
      $this->mailToUserReceiverId = $mailToUserReceiverId;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailToUserResult()
    {
      return $this->mailToUserResult;
    }

    /**
     * @param string $mailToUserResult
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doSendEmailToUserResponse
     */
    public function setMailToUserResult($mailToUserResult)
    {
      $this->mailToUserResult = $mailToUserResult;
      return $this;
    }

}
