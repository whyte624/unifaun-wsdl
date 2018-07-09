<?php

namespace UnifaunWsdl;

class Cod
{

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $paymentMethod
     */
    protected $paymentMethod = null;

    /**
     * @var string $accountNo
     */
    protected $accountNo = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $referenceType
     */
    protected $referenceType = null;

    /**
     * @param float $amount
     * @param string $currency
     * @param string $paymentMethod
     * @param string $accountNo
     * @param string $reference
     * @param string $referenceType
     */
    public function __construct($amount, $currency, $paymentMethod, $accountNo, $reference, $referenceType)
    {
      $this->amount = $amount;
      $this->currency = $currency;
      $this->paymentMethod = $paymentMethod;
      $this->accountNo = $accountNo;
      $this->reference = $reference;
      $this->referenceType = $referenceType;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \UnifaunWsdl\Cod
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \UnifaunWsdl\Cod
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
      return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return \UnifaunWsdl\Cod
     */
    public function setPaymentMethod($paymentMethod)
    {
      $this->paymentMethod = $paymentMethod;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNo()
    {
      return $this->accountNo;
    }

    /**
     * @param string $accountNo
     * @return \UnifaunWsdl\Cod
     */
    public function setAccountNo($accountNo)
    {
      $this->accountNo = $accountNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \UnifaunWsdl\Cod
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceType()
    {
      return $this->referenceType;
    }

    /**
     * @param string $referenceType
     * @return \UnifaunWsdl\Cod
     */
    public function setReferenceType($referenceType)
    {
      $this->referenceType = $referenceType;
      return $this;
    }

}
