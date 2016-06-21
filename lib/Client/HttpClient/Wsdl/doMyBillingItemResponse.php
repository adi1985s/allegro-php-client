<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doMyBillingItemResponse
{

    /**
     * @var ArrayOfItembilling $entryFees
     */
    protected $entryFees = null;

    /**
     * @var ArrayOfItembilling $endingFees
     */
    protected $endingFees = null;

    /**
     * @param ArrayOfItembilling $entryFees
     * @param ArrayOfItembilling $endingFees
     */
    public function __construct($entryFees = null, $endingFees = null)
    {
      $this->entryFees = $entryFees;
      $this->endingFees = $endingFees;
    }

    /**
     * @return ArrayOfItembilling
     */
    public function getEntryFees()
    {
      return $this->entryFees;
    }

    /**
     * @param ArrayOfItembilling $entryFees
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doMyBillingItemResponse
     */
    public function setEntryFees($entryFees)
    {
      $this->entryFees = $entryFees;
      return $this;
    }

    /**
     * @return ArrayOfItembilling
     */
    public function getEndingFees()
    {
      return $this->endingFees;
    }

    /**
     * @param ArrayOfItembilling $endingFees
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doMyBillingItemResponse
     */
    public function setEndingFees($endingFees)
    {
      $this->endingFees = $endingFees;
      return $this;
    }

}
