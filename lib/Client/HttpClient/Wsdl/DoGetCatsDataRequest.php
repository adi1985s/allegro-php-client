<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoGetCatsDataRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryId
     * @param int $localVersion
     * @param string $webapiKey
     */
    public function __construct($countryId = null, $localVersion = null, $webapiKey = null)
    {
      $this->countryId = $countryId;
      $this->localVersion = $localVersion;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCatsDataRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
      return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCatsDataRequest
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCatsDataRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
