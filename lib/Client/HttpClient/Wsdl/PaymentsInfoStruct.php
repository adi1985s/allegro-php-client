<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class PaymentsInfoStruct
{

    /**
     * @var float $paymentsBalance
     */
    protected $paymentsBalance = null;

    /**
     * @var string $paymentsBankAccount
     */
    protected $paymentsBankAccount = null;

    /**
     * @var PaymentsUserDataStruct $paymentsUserData
     */
    protected $paymentsUserData = null;

    /**
     * @var PaymentsPayoutStruct $paymentsPayout
     */
    protected $paymentsPayout = null;

    /**
     * @var int $paymentsNotifications
     */
    protected $paymentsNotifications = null;

    /**
     * @param float $paymentsBalance
     * @param string $paymentsBankAccount
     * @param PaymentsUserDataStruct $paymentsUserData
     * @param PaymentsPayoutStruct $paymentsPayout
     * @param int $paymentsNotifications
     */
    public function __construct($paymentsBalance = null, $paymentsBankAccount = null, $paymentsUserData = null, $paymentsPayout = null, $paymentsNotifications = null)
    {
      $this->paymentsBalance = $paymentsBalance;
      $this->paymentsBankAccount = $paymentsBankAccount;
      $this->paymentsUserData = $paymentsUserData;
      $this->paymentsPayout = $paymentsPayout;
      $this->paymentsNotifications = $paymentsNotifications;
    }

    /**
     * @return float
     */
    public function getPaymentsBalance()
    {
      return $this->paymentsBalance;
    }

    /**
     * @param float $paymentsBalance
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PaymentsInfoStruct
     */
    public function setPaymentsBalance($paymentsBalance)
    {
      $this->paymentsBalance = $paymentsBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentsBankAccount()
    {
      return $this->paymentsBankAccount;
    }

    /**
     * @param string $paymentsBankAccount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PaymentsInfoStruct
     */
    public function setPaymentsBankAccount($paymentsBankAccount)
    {
      $this->paymentsBankAccount = $paymentsBankAccount;
      return $this;
    }

    /**
     * @return PaymentsUserDataStruct
     */
    public function getPaymentsUserData()
    {
      return $this->paymentsUserData;
    }

    /**
     * @param PaymentsUserDataStruct $paymentsUserData
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PaymentsInfoStruct
     */
    public function setPaymentsUserData($paymentsUserData)
    {
      $this->paymentsUserData = $paymentsUserData;
      return $this;
    }

    /**
     * @return PaymentsPayoutStruct
     */
    public function getPaymentsPayout()
    {
      return $this->paymentsPayout;
    }

    /**
     * @param PaymentsPayoutStruct $paymentsPayout
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PaymentsInfoStruct
     */
    public function setPaymentsPayout($paymentsPayout)
    {
      $this->paymentsPayout = $paymentsPayout;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentsNotifications()
    {
      return $this->paymentsNotifications;
    }

    /**
     * @param int $paymentsNotifications
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PaymentsInfoStruct
     */
    public function setPaymentsNotifications($paymentsNotifications)
    {
      $this->paymentsNotifications = $paymentsNotifications;
      return $this;
    }

}
