<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doSetUserLicenceDateResponse
{

    /**
     * @var int $setDateValue
     */
    protected $setDateValue = null;

    /**
     * @param int $setDateValue
     */
    public function __construct($setDateValue = null)
    {
      $this->setDateValue = $setDateValue;
    }

    /**
     * @return int
     */
    public function getSetDateValue()
    {
      return $this->setDateValue;
    }

    /**
     * @param int $setDateValue
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doSetUserLicenceDateResponse
     */
    public function setSetDateValue($setDateValue)
    {
      $this->setDateValue = $setDateValue;
      return $this;
    }

}
