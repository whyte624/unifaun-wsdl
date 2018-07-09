<?php

namespace UnifaunWsdl;

class printResponse
{

    /**
     * @var PrintResult $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PrintResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param PrintResult $result
     * @return \UnifaunWsdl\printResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
