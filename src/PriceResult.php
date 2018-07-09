<?php

namespace UnifaunWsdl;

class PriceResult
{

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    /**
     * @var string $consignmentId
     */
    protected $consignmentId = null;

    /**
     * @var string $statusCode
     */
    protected $statusCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var CalculatedPrice $calculatedPrice
     */
    protected $calculatedPrice = null;

    /**
     * @param string $consignmentNo
     * @param string $statusCode
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
     * @return \UnifaunWsdl\PriceResult
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentId()
    {
      return $this->consignmentId;
    }

    /**
     * @param string $consignmentId
     * @return \UnifaunWsdl\PriceResult
     */
    public function setConsignmentId($consignmentId)
    {
      $this->consignmentId = $consignmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
      return $this->statusCode;
    }

    /**
     * @param string $statusCode
     * @return \UnifaunWsdl\PriceResult
     */
    public function setStatusCode($statusCode)
    {
      $this->statusCode = $statusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \UnifaunWsdl\PriceResult
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return CalculatedPrice
     */
    public function getCalculatedPrice()
    {
      return $this->calculatedPrice;
    }

    /**
     * @param CalculatedPrice $calculatedPrice
     * @return \UnifaunWsdl\PriceResult
     */
    public function setCalculatedPrice($calculatedPrice)
    {
      $this->calculatedPrice = $calculatedPrice;
      return $this;
    }

}
