<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class WatchListInfoStruct
{

    /**
     * @var ArrayOfLong $itemsAdded
     */
    protected $itemsAdded = null;

    /**
     * @var ArrayOfItemsnotaddedstruct $itemsNotAdded
     */
    protected $itemsNotAdded = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsAdded()
    {
      return $this->itemsAdded;
    }

    /**
     * @param ArrayOfLong $itemsAdded
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\WatchListInfoStruct
     */
    public function setItemsAdded($itemsAdded)
    {
      $this->itemsAdded = $itemsAdded;
      return $this;
    }

    /**
     * @return ArrayOfItemsnotaddedstruct
     */
    public function getItemsNotAdded()
    {
      return $this->itemsNotAdded;
    }

    /**
     * @param ArrayOfItemsnotaddedstruct $itemsNotAdded
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\WatchListInfoStruct
     */
    public function setItemsNotAdded($itemsNotAdded)
    {
      $this->itemsNotAdded = $itemsNotAdded;
      return $this;
    }

}
