<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetMyPaymentsRefundsResponse
{

    /**
     * @var ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     */
    protected $payTransPaymentRefunds = null;

    /**
     * @param ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     */
    public function __construct($payTransPaymentRefunds = null)
    {
      $this->payTransPaymentRefunds = $payTransPaymentRefunds;
    }

    /**
     * @return ArrayOfUserpaymentrefundsstruct
     */
    public function getPayTransPaymentRefunds()
    {
      return $this->payTransPaymentRefunds;
    }

    /**
     * @param ArrayOfUserpaymentrefundsstruct $payTransPaymentRefunds
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyPaymentsRefundsResponse
     */
    public function setPayTransPaymentRefunds($payTransPaymentRefunds)
    {
      $this->payTransPaymentRefunds = $payTransPaymentRefunds;
      return $this;
    }

}
