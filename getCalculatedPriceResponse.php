<?php

namespace UnifaunWsdl;

class getCalculatedPriceResponse
{

    /**
     * @var PriceResultList $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceResultList
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param PriceResultList $result
     * @return \UnifaunWsdl\getCalculatedPriceResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
