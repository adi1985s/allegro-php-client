<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoGetCountriesRequest
{

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryCode
     * @param string $webapiKey
     */
    public function __construct($countryCode = null, $webapiKey = null)
    {
      $this->countryCode = $countryCode;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCountriesRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCountriesRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
