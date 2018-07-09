<?php

namespace UnifaunWsdl;

class findByIdResponse
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
     * @return \UnifaunWsdl\findByIdResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
