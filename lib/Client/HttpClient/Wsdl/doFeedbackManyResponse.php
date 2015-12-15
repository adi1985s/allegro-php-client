<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doFeedbackManyResponse
{

    /**
     * @var ArrayOfFeedbackresultstruct $feResults
     */
    protected $feResults = null;

    /**
     * @param ArrayOfFeedbackresultstruct $feResults
     */
    public function __construct($feResults = null)
    {
      $this->feResults = $feResults;
    }

    /**
     * @return ArrayOfFeedbackresultstruct
     */
    public function getFeResults()
    {
      return $this->feResults;
    }

    /**
     * @param ArrayOfFeedbackresultstruct $feResults
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doFeedbackManyResponse
     */
    public function setFeResults($feResults)
    {
      $this->feResults = $feResults;
      return $this;
    }

}
