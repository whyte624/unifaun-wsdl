<?php

namespace UnifaunWsdl;

class isCompleteResponse
{

    /**
     * @var boolean $result
     */
    protected $result = null;

    /**
     * @param boolean $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return boolean
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param boolean $result
     * @return \UnifaunWsdl\isCompleteResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
