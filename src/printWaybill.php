<?php

namespace UnifaunWsdl;

class printWaybill
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    /**
     * @param string $consignmentNo
     */
    public function __construct($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
    }

    /**
     * @return AuthenticationToken
     */
    public function getAuthenticationToken()
    {
      return $this->AuthenticationToken;
    }

    /**
     * @param AuthenticationToken $AuthenticationToken
     * @return \UnifaunWsdl\printWaybill
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentNo()
    {
      return $this->consignmentNo;
    }

    /**
     * @param string $consignmentNo
     * @return \UnifaunWsdl\printWaybill
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

}
