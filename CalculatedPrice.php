<?php

namespace UnifaunWsdl;

class CalculatedPrice
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
     * @var PriceDetail[] $priceDetail
     */
    protected $priceDetail = null;

    
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
     * @return \UnifaunWsdl\CalculatedPrice
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
     * @return \UnifaunWsdl\CalculatedPrice
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return PriceDetail[]
     */
    public function getPriceDetail()
    {
      return $this->priceDetail;
    }

    /**
     * @param PriceDetail[] $priceDetail
     * @return \UnifaunWsdl\CalculatedPrice
     */
    public function setPriceDetail(array $priceDetail = null)
    {
      $this->priceDetail = $priceDetail;
      return $this;
    }

}
