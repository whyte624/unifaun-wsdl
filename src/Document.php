<?php

namespace UnifaunWsdl;

class Document
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $contentType
     */
    protected $contentType = null;

    /**
     * @var string $data
     */
    protected $data = null;

    /**
     * @var string $encoding
     */
    protected $encoding = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @param int $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \UnifaunWsdl\Document
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
      return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return \UnifaunWsdl\Document
     */
    public function setContentType($contentType)
    {
      $this->contentType = $contentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param string $data
     * @return \UnifaunWsdl\Document
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
      return $this->encoding;
    }

    /**
     * @param string $encoding
     * @return \UnifaunWsdl\Document
     */
    public function setEncoding($encoding)
    {
      $this->encoding = $encoding;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \UnifaunWsdl\Document
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
