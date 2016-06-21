<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetMyWatchItemsResponse
{

    /**
     * @var int $watchItemsCounter
     */
    protected $watchItemsCounter = null;

    /**
     * @var ArrayOfWatchitemstruct $watchItemsList
     */
    protected $watchItemsList = null;

    /**
     * @param int $watchItemsCounter
     * @param ArrayOfWatchitemstruct $watchItemsList
     */
    public function __construct($watchItemsCounter = null, $watchItemsList = null)
    {
      $this->watchItemsCounter = $watchItemsCounter;
      $this->watchItemsList = $watchItemsList;
    }

    /**
     * @return int
     */
    public function getWatchItemsCounter()
    {
      return $this->watchItemsCounter;
    }

    /**
     * @param int $watchItemsCounter
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyWatchItemsResponse
     */
    public function setWatchItemsCounter($watchItemsCounter)
    {
      $this->watchItemsCounter = $watchItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfWatchitemstruct
     */
    public function getWatchItemsList()
    {
      return $this->watchItemsList;
    }

    /**
     * @param ArrayOfWatchitemstruct $watchItemsList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyWatchItemsResponse
     */
    public function setWatchItemsList($watchItemsList)
    {
      $this->watchItemsList = $watchItemsList;
      return $this;
    }

}
