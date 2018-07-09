<?php

namespace UnifaunWsdl;

class deletePackageIdResponse
{

    /**
     * @var GoodsItemResult $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GoodsItemResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GoodsItemResult $result
     * @return \UnifaunWsdl\deletePackageIdResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
