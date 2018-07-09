<?php

namespace UnifaunWsdl;

class addGoodsRowResponse
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
     * @return \UnifaunWsdl\addGoodsRowResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
