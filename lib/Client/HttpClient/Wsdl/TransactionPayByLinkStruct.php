<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class TransactionPayByLinkStruct
{

    /**
     * @var string $actionHttpMethod
     */
    protected $actionHttpMethod = null;

    /**
     * @var string $actionUrl
     */
    protected $actionUrl = null;

    /**
     * @var ArrayOfActiondatastruct $actionData
     */
    protected $actionData = null;

    /**
     * @param string $actionHttpMethod
     * @param string $actionUrl
     */
    public function __construct($actionHttpMethod = null, $actionUrl = null)
    {
      $this->actionHttpMethod = $actionHttpMethod;
      $this->actionUrl = $actionUrl;
    }

    /**
     * @return string
     */
    public function getActionHttpMethod()
    {
      return $this->actionHttpMethod;
    }

    /**
     * @param string $actionHttpMethod
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\TransactionPayByLinkStruct
     */
    public function setActionHttpMethod($actionHttpMethod)
    {
      $this->actionHttpMethod = $actionHttpMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionUrl()
    {
      return $this->actionUrl;
    }

    /**
     * @param string $actionUrl
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\TransactionPayByLinkStruct
     */
    public function setActionUrl($actionUrl)
    {
      $this->actionUrl = $actionUrl;
      return $this;
    }

    /**
     * @return ArrayOfActiondatastruct
     */
    public function getActionData()
    {
      return $this->actionData;
    }

    /**
     * @param ArrayOfActiondatastruct $actionData
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\TransactionPayByLinkStruct
     */
    public function setActionData($actionData)
    {
      $this->actionData = $actionData;
      return $this;
    }

}
