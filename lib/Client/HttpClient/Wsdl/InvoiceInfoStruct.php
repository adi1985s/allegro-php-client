<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class InvoiceInfoStruct
{

    /**
     * @var int $invoiceAddressType
     */
    protected $invoiceAddressType = null;

    /**
     * @var AddressUserDataStruct $invoiceAddressData
     */
    protected $invoiceAddressData = null;

    /**
     * @var string $invoiceNip
     */
    protected $invoiceNip = null;

    /**
     * @param int $invoiceAddressType
     * @param string $invoiceNip
     */
    public function __construct($invoiceAddressType = null, $invoiceNip = null)
    {
      $this->invoiceAddressType = $invoiceAddressType;
      $this->invoiceNip = $invoiceNip;
    }

    /**
     * @return int
     */
    public function getInvoiceAddressType()
    {
      return $this->invoiceAddressType;
    }

    /**
     * @param int $invoiceAddressType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\InvoiceInfoStruct
     */
    public function setInvoiceAddressType($invoiceAddressType)
    {
      $this->invoiceAddressType = $invoiceAddressType;
      return $this;
    }

    /**
     * @return AddressUserDataStruct
     */
    public function getInvoiceAddressData()
    {
      return $this->invoiceAddressData;
    }

    /**
     * @param AddressUserDataStruct $invoiceAddressData
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\InvoiceInfoStruct
     */
    public function setInvoiceAddressData($invoiceAddressData)
    {
      $this->invoiceAddressData = $invoiceAddressData;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNip()
    {
      return $this->invoiceNip;
    }

    /**
     * @param string $invoiceNip
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\InvoiceInfoStruct
     */
    public function setInvoiceNip($invoiceNip)
    {
      $this->invoiceNip = $invoiceNip;
      return $this;
    }

}
