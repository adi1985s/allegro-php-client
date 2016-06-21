<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetSellFormFieldsForCategoryResponse
{

    /**
     * @var SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     */
    protected $sellFormFieldsForCategory = null;

    /**
     * @param SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     */
    public function __construct($sellFormFieldsForCategory = null)
    {
      $this->sellFormFieldsForCategory = $sellFormFieldsForCategory;
    }

    /**
     * @return SellFormFieldsForCategoryStruct
     */
    public function getSellFormFieldsForCategory()
    {
      return $this->sellFormFieldsForCategory;
    }

    /**
     * @param SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetSellFormFieldsForCategoryResponse
     */
    public function setSellFormFieldsForCategory($sellFormFieldsForCategory)
    {
      $this->sellFormFieldsForCategory = $sellFormFieldsForCategory;
      return $this;
    }

}
