<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfMyfeedbackliststruct2
{

    /**
     * @var MyFeedbackListStruct2[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MyFeedbackListStruct2[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param MyFeedbackListStruct2[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfMyfeedbackliststruct2
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
