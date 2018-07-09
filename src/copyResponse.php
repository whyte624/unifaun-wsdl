<?php

namespace UnifaunWsdl;

class copyResponse
{

    /**
     * @var ConsignmentResult $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConsignmentResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConsignmentResult $result
     * @return \UnifaunWsdl\copyResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
