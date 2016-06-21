<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doAddDescToItemsResponse
{

    /**
     * @var ArrayOfLong $arrayItemsAddId
     */
    protected $arrayItemsAddId = null;

    /**
     * @var ArrayOfLong $arrayItemsDescToLong
     */
    protected $arrayItemsDescToLong = null;

    /**
     * @var ArrayOfLong $arrayItemsNotFound
     */
    protected $arrayItemsNotFound = null;

    /**
     * @param ArrayOfLong $arrayItemsAddId
     * @param ArrayOfLong $arrayItemsDescToLong
     * @param ArrayOfLong $arrayItemsNotFound
     */
    public function __construct($arrayItemsAddId = null, $arrayItemsDescToLong = null, $arrayItemsNotFound = null)
    {
      $this->arrayItemsAddId = $arrayItemsAddId;
      $this->arrayItemsDescToLong = $arrayItemsDescToLong;
      $this->arrayItemsNotFound = $arrayItemsNotFound;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsAddId()
    {
      return $this->arrayItemsAddId;
    }

    /**
     * @param ArrayOfLong $arrayItemsAddId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doAddDescToItemsResponse
     */
    public function setArrayItemsAddId($arrayItemsAddId)
    {
      $this->arrayItemsAddId = $arrayItemsAddId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsDescToLong()
    {
      return $this->arrayItemsDescToLong;
    }

    /**
     * @param ArrayOfLong $arrayItemsDescToLong
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doAddDescToItemsResponse
     */
    public function setArrayItemsDescToLong($arrayItemsDescToLong)
    {
      $this->arrayItemsDescToLong = $arrayItemsDescToLong;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsNotFound()
    {
      return $this->arrayItemsNotFound;
    }

    /**
     * @param ArrayOfLong $arrayItemsNotFound
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doAddDescToItemsResponse
     */
    public function setArrayItemsNotFound($arrayItemsNotFound)
    {
      $this->arrayItemsNotFound = $arrayItemsNotFound;
      return $this;
    }

}
