<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemBilling
{

    /**
     * @var string $biName
     */
    protected $biName = null;

    /**
     * @var string $biValue
     */
    protected $biValue = null;

    /**
     * @param string $biName
     * @param string $biValue
     */
    public function __construct($biName = null, $biValue = null)
    {
      $this->biName = $biName;
      $this->biValue = $biValue;
    }

    /**
     * @return string
     */
    public function getBiName()
    {
      return $this->biName;
    }

    /**
     * @param string $biName
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemBilling
     */
    public function setBiName($biName)
    {
      $this->biName = $biName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBiValue()
    {
      return $this->biValue;
    }

    /**
     * @param string $biValue
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemBilling
     */
    public function setBiValue($biValue)
    {
      $this->biValue = $biValue;
      return $this;
    }

}
