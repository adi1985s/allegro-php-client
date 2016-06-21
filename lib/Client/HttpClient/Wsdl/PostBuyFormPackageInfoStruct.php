<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class PostBuyFormPackageInfoStruct
{

    /**
     * @var ArrayOfString $packageIdsAdded
     */
    protected $packageIdsAdded = null;

    /**
     * @var ArrayOfString $packageIdsNotAddedIncorrectOperatorId
     */
    protected $packageIdsNotAddedIncorrectOperatorId = null;

    /**
     * @var ArrayOfString $packageIdsNotAddedIncorrectPackageId
     */
    protected $packageIdsNotAddedIncorrectPackageId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getPackageIdsAdded()
    {
      return $this->packageIdsAdded;
    }

    /**
     * @param ArrayOfString $packageIdsAdded
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PostBuyFormPackageInfoStruct
     */
    public function setPackageIdsAdded($packageIdsAdded)
    {
      $this->packageIdsAdded = $packageIdsAdded;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPackageIdsNotAddedIncorrectOperatorId()
    {
      return $this->packageIdsNotAddedIncorrectOperatorId;
    }

    /**
     * @param ArrayOfString $packageIdsNotAddedIncorrectOperatorId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PostBuyFormPackageInfoStruct
     */
    public function setPackageIdsNotAddedIncorrectOperatorId($packageIdsNotAddedIncorrectOperatorId)
    {
      $this->packageIdsNotAddedIncorrectOperatorId = $packageIdsNotAddedIncorrectOperatorId;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPackageIdsNotAddedIncorrectPackageId()
    {
      return $this->packageIdsNotAddedIncorrectPackageId;
    }

    /**
     * @param ArrayOfString $packageIdsNotAddedIncorrectPackageId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\PostBuyFormPackageInfoStruct
     */
    public function setPackageIdsNotAddedIncorrectPackageId($packageIdsNotAddedIncorrectPackageId)
    {
      $this->packageIdsNotAddedIncorrectPackageId = $packageIdsNotAddedIncorrectPackageId;
      return $this;
    }

}
