<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DurationInfoStruct
{

    /**
     * @var int $durationType
     */
    protected $durationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
      return $this->durationType;
    }

    /**
     * @param int $durationType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DurationInfoStruct
     */
    public function setDurationType($durationType)
    {
      $this->durationType = $durationType;
      return $this;
    }

}
