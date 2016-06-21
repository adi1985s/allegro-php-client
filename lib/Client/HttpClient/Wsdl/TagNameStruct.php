<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class TagNameStruct
{

    /**
     * @var string $tagName
     */
    protected $tagName = null;

    /**
     * @param string $tagName
     */
    public function __construct($tagName = null)
    {
      $this->tagName = $tagName;
    }

    /**
     * @return string
     */
    public function getTagName()
    {
      return $this->tagName;
    }

    /**
     * @param string $tagName
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\TagNameStruct
     */
    public function setTagName($tagName)
    {
      $this->tagName = $tagName;
      return $this;
    }

}
