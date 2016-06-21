<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetMyPaymentsResponse
{

    /**
     * @var ArrayOfUserpaymentstruct $payTransPayment
     */
    protected $payTransPayment = null;

    /**
     * @param ArrayOfUserpaymentstruct $payTransPayment
     */
    public function __construct($payTransPayment = null)
    {
      $this->payTransPayment = $payTransPayment;
    }

    /**
     * @return ArrayOfUserpaymentstruct
     */
    public function getPayTransPayment()
    {
      return $this->payTransPayment;
    }

    /**
     * @param ArrayOfUserpaymentstruct $payTransPayment
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyPaymentsResponse
     */
    public function setPayTransPayment($payTransPayment)
    {
      $this->payTransPayment = $payTransPayment;
      return $this;
    }

}
