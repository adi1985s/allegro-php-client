<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetMyWatchedItemsResponse
{

    /**
     * @var int $watchedItemsCounter
     */
    protected $watchedItemsCounter = null;

    /**
     * @var ArrayOfWatcheditemstruct $watchedItemsList
     */
    protected $watchedItemsList = null;

    /**
     * @param int $watchedItemsCounter
     * @param ArrayOfWatcheditemstruct $watchedItemsList
     */
    public function __construct($watchedItemsCounter = null, $watchedItemsList = null)
    {
      $this->watchedItemsCounter = $watchedItemsCounter;
      $this->watchedItemsList = $watchedItemsList;
    }

    /**
     * @return int
     */
    public function getWatchedItemsCounter()
    {
      return $this->watchedItemsCounter;
    }

    /**
     * @param int $watchedItemsCounter
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyWatchedItemsResponse
     */
    public function setWatchedItemsCounter($watchedItemsCounter)
    {
      $this->watchedItemsCounter = $watchedItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfWatcheditemstruct
     */
    public function getWatchedItemsList()
    {
      return $this->watchedItemsList;
    }

    /**
     * @param ArrayOfWatcheditemstruct $watchedItemsList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyWatchedItemsResponse
     */
    public function setWatchedItemsList($watchedItemsList)
    {
      $this->watchedItemsList = $watchedItemsList;
      return $this;
    }

}
