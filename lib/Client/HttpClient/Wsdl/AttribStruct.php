<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class AttribStruct
{

    /**
     * @var string $attribName
     */
    protected $attribName = null;

    /**
     * @var ArrayOfString $attribValues
     */
    protected $attribValues = null;

    /**
     * @param string $attribName
     */
    public function __construct($attribName = null)
    {
      $this->attribName = $attribName;
    }

    /**
     * @return string
     */
    public function getAttribName()
    {
      return $this->attribName;
    }

    /**
     * @param string $attribName
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\AttribStruct
     */
    public function setAttribName($attribName)
    {
      $this->attribName = $attribName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getAttribValues()
    {
      return $this->attribValues;
    }

    /**
     * @param ArrayOfString $attribValues
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\AttribStruct
     */
    public function setAttribValues($attribValues)
    {
      $this->attribValues = $attribValues;
      return $this;
    }

}
