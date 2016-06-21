<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetFilledPostBuyFormsResponse
{

    /**
     * @var FilledPostBuyFormsStruct $filledPostBuyForms
     */
    protected $filledPostBuyForms = null;

    /**
     * @param FilledPostBuyFormsStruct $filledPostBuyForms
     */
    public function __construct($filledPostBuyForms = null)
    {
      $this->filledPostBuyForms = $filledPostBuyForms;
    }

    /**
     * @return FilledPostBuyFormsStruct
     */
    public function getFilledPostBuyForms()
    {
      return $this->filledPostBuyForms;
    }

    /**
     * @param FilledPostBuyFormsStruct $filledPostBuyForms
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetFilledPostBuyFormsResponse
     */
    public function setFilledPostBuyForms($filledPostBuyForms)
    {
      $this->filledPostBuyForms = $filledPostBuyForms;
      return $this;
    }

}
