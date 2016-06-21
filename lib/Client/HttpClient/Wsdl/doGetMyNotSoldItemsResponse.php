<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetMyNotSoldItemsResponse
{

    /**
     * @var int $notSoldItemsCounter
     */
    protected $notSoldItemsCounter = null;

    /**
     * @var ArrayOfNotsolditemstruct $notSoldItemsList
     */
    protected $notSoldItemsList = null;

    /**
     * @param int $notSoldItemsCounter
     * @param ArrayOfNotsolditemstruct $notSoldItemsList
     */
    public function __construct($notSoldItemsCounter = null, $notSoldItemsList = null)
    {
      $this->notSoldItemsCounter = $notSoldItemsCounter;
      $this->notSoldItemsList = $notSoldItemsList;
    }

    /**
     * @return int
     */
    public function getNotSoldItemsCounter()
    {
      return $this->notSoldItemsCounter;
    }

    /**
     * @param int $notSoldItemsCounter
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyNotSoldItemsResponse
     */
    public function setNotSoldItemsCounter($notSoldItemsCounter)
    {
      $this->notSoldItemsCounter = $notSoldItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfNotsolditemstruct
     */
    public function getNotSoldItemsList()
    {
      return $this->notSoldItemsList;
    }

    /**
     * @param ArrayOfNotsolditemstruct $notSoldItemsList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMyNotSoldItemsResponse
     */
    public function setNotSoldItemsList($notSoldItemsList)
    {
      $this->notSoldItemsList = $notSoldItemsList;
      return $this;
    }

}
