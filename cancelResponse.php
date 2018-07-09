<?php

namespace UnifaunWsdl;

class cancelResponse
{

    /**
     * @var cancelResult $result
     */
    protected $result = null;

    /**
     * @param cancelResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return cancelResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param cancelResult $result
     * @return \UnifaunWsdl\cancelResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
