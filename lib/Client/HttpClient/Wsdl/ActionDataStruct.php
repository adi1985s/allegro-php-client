<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ActionDataStruct
{

    /**
     * @var string $actionKey
     */
    protected $actionKey = null;

    /**
     * @var string $actionValue
     */
    protected $actionValue = null;

    /**
     * @param string $actionKey
     * @param string $actionValue
     */
    public function __construct($actionKey = null, $actionValue = null)
    {
      $this->actionKey = $actionKey;
      $this->actionValue = $actionValue;
    }

    /**
     * @return string
     */
    public function getActionKey()
    {
      return $this->actionKey;
    }

    /**
     * @param string $actionKey
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ActionDataStruct
     */
    public function setActionKey($actionKey)
    {
      $this->actionKey = $actionKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionValue()
    {
      return $this->actionValue;
    }

    /**
     * @param string $actionValue
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ActionDataStruct
     */
    public function setActionValue($actionValue)
    {
      $this->actionValue = $actionValue;
      return $this;
    }

}
