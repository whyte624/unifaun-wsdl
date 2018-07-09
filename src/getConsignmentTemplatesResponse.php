<?php

namespace UnifaunWsdl;

class getConsignmentTemplatesResponse
{

    /**
     * @var ConsignmentTemplatesResult $result
     */
    protected $result = null;

    /**
     * @param ConsignmentTemplatesResult $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return ConsignmentTemplatesResult
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConsignmentTemplatesResult $result
     * @return \UnifaunWsdl\getConsignmentTemplatesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
