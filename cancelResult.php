<?php

namespace UnifaunWsdl;

class cancelResult
{

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var int $statusCode
     */
    protected $statusCode = null;

    /**
     * @param string $consignmentNo
     * @param int $statusCode
     */
    public function __construct($consignmentNo, $statusCode)
    {
      $this->consignmentNo = $consignmentNo;
      $this->statusCode = $statusCode;
    }

    /**
     * @return string
     */
    public function getConsignmentNo()
    {
      return $this->consignmentNo;
    }

    /**
     * @param string $consignmentNo
     * @return \UnifaunWsdl\cancelResult
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
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
     * @return \UnifaunWsdl\cancelResult
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
     * @return \UnifaunWsdl\cancelResult
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
