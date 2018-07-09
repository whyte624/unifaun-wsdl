<?php

namespace UnifaunWsdl;

class getTransactionIdResponse
{

    /**
     * @var string $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param string $result
     * @return \UnifaunWsdl\getTransactionIdResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
