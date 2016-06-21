<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetItemFieldsResponse
{

    /**
     * @var ArrayOfFieldsvalue $itemFields
     */
    protected $itemFields = null;

    /**
     * @param ArrayOfFieldsvalue $itemFields
     */
    public function __construct($itemFields = null)
    {
      $this->itemFields = $itemFields;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getItemFields()
    {
      return $this->itemFields;
    }

    /**
     * @param ArrayOfFieldsvalue $itemFields
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetItemFieldsResponse
     */
    public function setItemFields($itemFields)
    {
      $this->itemFields = $itemFields;
      return $this;
    }

}
