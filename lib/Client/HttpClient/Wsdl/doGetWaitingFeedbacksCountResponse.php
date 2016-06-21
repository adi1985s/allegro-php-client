<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetWaitingFeedbacksCountResponse
{

    /**
     * @var int $feedbackCount
     */
    protected $feedbackCount = null;

    /**
     * @param int $feedbackCount
     */
    public function __construct($feedbackCount = null)
    {
      $this->feedbackCount = $feedbackCount;
    }

    /**
     * @return int
     */
    public function getFeedbackCount()
    {
      return $this->feedbackCount;
    }

    /**
     * @param int $feedbackCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetWaitingFeedbacksCountResponse
     */
    public function setFeedbackCount($feedbackCount)
    {
      $this->feedbackCount = $feedbackCount;
      return $this;
    }

}
