<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfMycontactlist
{

    /**
     * @var MyContactList[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MyContactList[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param MyContactList[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfMycontactlist
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
