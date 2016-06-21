<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doMyFeedback2Response
{

    /**
     * @var ArrayOfMyfeedbackliststruct2 $myfeedbackList
     */
    protected $myfeedbackList = null;

    /**
     * @param ArrayOfMyfeedbackliststruct2 $myfeedbackList
     */
    public function __construct($myfeedbackList = null)
    {
      $this->myfeedbackList = $myfeedbackList;
    }

    /**
     * @return ArrayOfMyfeedbackliststruct2
     */
    public function getMyfeedbackList()
    {
      return $this->myfeedbackList;
    }

    /**
     * @param ArrayOfMyfeedbackliststruct2 $myfeedbackList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doMyFeedback2Response
     */
    public function setMyfeedbackList($myfeedbackList)
    {
      $this->myfeedbackList = $myfeedbackList;
      return $this;
    }

}
