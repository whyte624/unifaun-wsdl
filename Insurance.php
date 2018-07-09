<?php

namespace UnifaunWsdl;

class Insurance
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
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount, $currency)
    {
      $this->amount = $amount;
      $this->currency = $currency;
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
     * @return \UnifaunWsdl\Insurance
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
     * @return \UnifaunWsdl\Insurance
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

}
