<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class StructSellFailed
{

    /**
     * @var int $sellItemId
     */
    protected $sellItemId = null;

    /**
     * @var string $sellFaultCode
     */
    protected $sellFaultCode = null;

    /**
     * @var string $sellFaultString
     */
    protected $sellFaultString = null;

    /**
     * @param int $sellItemId
     * @param string $sellFaultCode
     * @param string $sellFaultString
     */
    public function __construct($sellItemId = null, $sellFaultCode = null, $sellFaultString = null)
    {
      $this->sellItemId = $sellItemId;
      $this->sellFaultCode = $sellFaultCode;
      $this->sellFaultString = $sellFaultString;
    }

    /**
     * @return int
     */
    public function getSellItemId()
    {
      return $this->sellItemId;
    }

    /**
     * @param int $sellItemId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\StructSellFailed
     */
    public function setSellItemId($sellItemId)
    {
      $this->sellItemId = $sellItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFaultCode()
    {
      return $this->sellFaultCode;
    }

    /**
     * @param string $sellFaultCode
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\StructSellFailed
     */
    public function setSellFaultCode($sellFaultCode)
    {
      $this->sellFaultCode = $sellFaultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFaultString()
    {
      return $this->sellFaultString;
    }

    /**
     * @param string $sellFaultString
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\StructSellFailed
     */
    public function setSellFaultString($sellFaultString)
    {
      $this->sellFaultString = $sellFaultString;
      return $this;
    }

}
