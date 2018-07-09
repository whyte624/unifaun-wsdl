<?php

namespace UnifaunWsdl;

class ConsignmentList
{

    /**
     * @var Consignment[] $Consignment
     */
    protected $Consignment = null;

    /**
     * @param Consignment[] $Consignment
     */
    public function __construct(array $Consignment)
    {
      $this->Consignment = $Consignment;
    }

    /**
     * @return Consignment[]
     */
    public function getConsignment()
    {
      return $this->Consignment;
    }

    /**
     * @param Consignment[] $Consignment
     * @return \UnifaunWsdl\ConsignmentList
     */
    public function setConsignment(array $Consignment)
    {
      $this->Consignment = $Consignment;
      return $this;
    }

}
