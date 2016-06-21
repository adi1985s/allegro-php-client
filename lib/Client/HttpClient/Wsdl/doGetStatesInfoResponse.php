<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetStatesInfoResponse
{

    /**
     * @var ArrayOfStateinfostruct $statesInfoArray
     */
    protected $statesInfoArray = null;

    /**
     * @param ArrayOfStateinfostruct $statesInfoArray
     */
    public function __construct($statesInfoArray = null)
    {
      $this->statesInfoArray = $statesInfoArray;
    }

    /**
     * @return ArrayOfStateinfostruct
     */
    public function getStatesInfoArray()
    {
      return $this->statesInfoArray;
    }

    /**
     * @param ArrayOfStateinfostruct $statesInfoArray
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetStatesInfoResponse
     */
    public function setStatesInfoArray($statesInfoArray)
    {
      $this->statesInfoArray = $statesInfoArray;
      return $this;
    }

}
