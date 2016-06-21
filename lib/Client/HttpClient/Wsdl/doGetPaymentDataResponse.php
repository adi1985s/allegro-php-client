<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetPaymentDataResponse
{

    /**
     * @var ArrayOfBillingdatatype $paymentList
     */
    protected $paymentList = null;

    /**
     * @param ArrayOfBillingdatatype $paymentList
     */
    public function __construct($paymentList = null)
    {
      $this->paymentList = $paymentList;
    }

    /**
     * @return ArrayOfBillingdatatype
     */
    public function getPaymentList()
    {
      return $this->paymentList;
    }

    /**
     * @param ArrayOfBillingdatatype $paymentList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetPaymentDataResponse
     */
    public function setPaymentList($paymentList)
    {
      $this->paymentList = $paymentList;
      return $this;
    }

}
