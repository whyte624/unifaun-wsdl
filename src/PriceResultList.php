<?php

namespace UnifaunWsdl;

class PriceResultList
{

    /**
     * @var PriceResult[] $priceResult
     */
    protected $priceResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceResult[]
     */
    public function getPriceResult()
    {
      return $this->priceResult;
    }

    /**
     * @param PriceResult[] $priceResult
     * @return \UnifaunWsdl\PriceResultList
     */
    public function setPriceResult(array $priceResult = null)
    {
      $this->priceResult = $priceResult;
      return $this;
    }

}
