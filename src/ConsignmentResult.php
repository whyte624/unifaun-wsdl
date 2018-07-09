<?php

namespace UnifaunWsdl;

class ConsignmentResult
{

    /**
     * @var Consignment[] $consignments
     */
    protected $consignments = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @var Document[] $documents
     */
    protected $documents = null;

    /**
     * @var Receipt $receipt
     */
    protected $receipt = null;

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
     * @return Consignment[]
     */
    public function getConsignments()
    {
      return $this->consignments;
    }

    /**
     * @param Consignment[] $consignments
     * @return \UnifaunWsdl\ConsignmentResult
     */
    public function setConsignments(array $consignments = null)
    {
      $this->consignments = $consignments;
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
     * @return \UnifaunWsdl\ConsignmentResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
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
     * @return \UnifaunWsdl\ConsignmentResult
     */
    public function setDocuments(array $documents = null)
    {
      $this->documents = $documents;
      return $this;
    }

    /**
     * @return Receipt
     */
    public function getReceipt()
    {
      return $this->receipt;
    }

    /**
     * @param Receipt $receipt
     * @return \UnifaunWsdl\ConsignmentResult
     */
    public function setReceipt($receipt)
    {
      $this->receipt = $receipt;
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
     * @return \UnifaunWsdl\ConsignmentResult
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

}
