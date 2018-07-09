<?php

namespace UnifaunWsdl;

class createResponse
{

    /**
     * @var Consignment $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Consignment
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param Consignment $result
     * @return \UnifaunWsdl\createResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
