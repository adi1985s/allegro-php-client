<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class CategoryPathType
{

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var int $categoryParentId
     */
    protected $categoryParentId = null;

    /**
     * @param int $categoryId
     * @param string $categoryName
     * @param int $categoryParentId
     */
    public function __construct($categoryId = null, $categoryName = null, $categoryParentId = null)
    {
      $this->categoryId = $categoryId;
      $this->categoryName = $categoryName;
      $this->categoryParentId = $categoryParentId;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\CategoryPathType
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\CategoryPathType
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryParentId()
    {
      return $this->categoryParentId;
    }

    /**
     * @param int $categoryParentId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\CategoryPathType
     */
    public function setCategoryParentId($categoryParentId)
    {
      $this->categoryParentId = $categoryParentId;
      return $this;
    }

}
