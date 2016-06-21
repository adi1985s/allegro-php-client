<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doSendPostBuyFormResponse
{

    /**
     * @var PostBuyFormStruct $postBuyForm
     */
    protected $postBuyForm = null;

    /**
     * @param PostBuyFormStruct $postBuyForm
     */
    public function __construct($postBuyForm = null)
    {
      $this->postBuyForm = $postBuyForm;
    }

    /**
     * @return PostBuyFormStruct
     */
    public function getPostBuyForm()
    {
      return $this->postBuyForm;
    }

    /**
     * @param PostBuyFormStruct $postBuyForm
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doSendPostBuyFormResponse
     */
    public function setPostBuyForm($postBuyForm)
    {
      $this->postBuyForm = $postBuyForm;
      return $this;
    }

}
