<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class CategoriesListType
{

    /**
     * @var ArrayOfCategorytreetype $categoriesTree
     */
    protected $categoriesTree = null;

    /**
     * @var ArrayOfCategorypathtype $categoriesPath
     */
    protected $categoriesPath = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCategorytreetype
     */
    public function getCategoriesTree()
    {
      return $this->categoriesTree;
    }

    /**
     * @param ArrayOfCategorytreetype $categoriesTree
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\CategoriesListType
     */
    public function setCategoriesTree($categoriesTree)
    {
      $this->categoriesTree = $categoriesTree;
      return $this;
    }

    /**
     * @return ArrayOfCategorypathtype
     */
    public function getCategoriesPath()
    {
      return $this->categoriesPath;
    }

    /**
     * @param ArrayOfCategorypathtype $categoriesPath
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\CategoriesListType
     */
    public function setCategoriesPath($categoriesPath)
    {
      $this->categoriesPath = $categoriesPath;
      return $this;
    }

}
