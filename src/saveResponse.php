<?php

namespace UnifaunWsdl;

class saveResponse
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
     * @return \UnifaunWsdl\saveResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
