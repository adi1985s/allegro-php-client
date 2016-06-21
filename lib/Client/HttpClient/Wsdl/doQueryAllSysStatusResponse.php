<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doQueryAllSysStatusResponse
{

    /**
     * @var ArrayOfSysstatustype $sysCountryStatus
     */
    protected $sysCountryStatus = null;

    /**
     * @param ArrayOfSysstatustype $sysCountryStatus
     */
    public function __construct($sysCountryStatus = null)
    {
      $this->sysCountryStatus = $sysCountryStatus;
    }

    /**
     * @return ArrayOfSysstatustype
     */
    public function getSysCountryStatus()
    {
      return $this->sysCountryStatus;
    }

    /**
     * @param ArrayOfSysstatustype $sysCountryStatus
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doQueryAllSysStatusResponse
     */
    public function setSysCountryStatus($sysCountryStatus)
    {
      $this->sysCountryStatus = $sysCountryStatus;
      return $this;
    }

}
