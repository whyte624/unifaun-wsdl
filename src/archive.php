<?php

namespace UnifaunWsdl;

class archive
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
     * @return \UnifaunWsdl\archive
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
     * @return \UnifaunWsdl\archive
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

}
