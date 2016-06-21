<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetUserLoginResponse
{

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @param string $userLogin
     */
    public function __construct($userLogin = null)
    {
      $this->userLogin = $userLogin;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
      return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetUserLoginResponse
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

}
