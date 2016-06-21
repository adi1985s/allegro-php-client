<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doMyContactResponse
{

    /**
     * @var ArrayOfMycontactlist $mycontactList
     */
    protected $mycontactList = null;

    /**
     * @param ArrayOfMycontactlist $mycontactList
     */
    public function __construct($mycontactList = null)
    {
      $this->mycontactList = $mycontactList;
    }

    /**
     * @return ArrayOfMycontactlist
     */
    public function getMycontactList()
    {
      return $this->mycontactList;
    }

    /**
     * @param ArrayOfMycontactlist $mycontactList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doMyContactResponse
     */
    public function setMycontactList($mycontactList)
    {
      $this->mycontactList = $mycontactList;
      return $this;
    }

}
