<?php

namespace UnifaunWsdl;

class PriceDetail
{

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var int $sortOrder
     */
    protected $sortOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \UnifaunWsdl\PriceDetail
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return \UnifaunWsdl\PriceDetail
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \UnifaunWsdl\PriceDetail
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param int $sortOrder
     * @return \UnifaunWsdl\PriceDetail
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
