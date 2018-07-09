<?php

namespace UnifaunWsdl;

class PrintResult
{

    /**
     * @var Document[] $documents
     */
    protected $documents = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @param int $statusCode
     */
    public function __construct($statusCode)
    {
      $this->statusCode = $statusCode;
    }

    /**
     * @return Document[]
     */
    public function getDocuments()
    {
      return $this->documents;
    }

    /**
     * @param Document[] $documents
     * @return \UnifaunWsdl\PrintResult
     */
    public function setDocuments(array $documents = null)
    {
      $this->documents = $documents;
      return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \UnifaunWsdl\PrintResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return \UnifaunWsdl\PrintResult
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
