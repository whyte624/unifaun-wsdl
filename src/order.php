<?php

namespace UnifaunWsdl;

class order
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    
    public function __construct()
    {
    
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
     * @return \UnifaunWsdl\order
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
     * @return \UnifaunWsdl\order
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

}
