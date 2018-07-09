<?php

namespace UnifaunWsdl;

class isOrdered
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string $consignmentId
     */
    protected $consignmentId = null;

    
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
     * @return \UnifaunWsdl\isOrdered
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentId()
    {
      return $this->consignmentId;
    }

    /**
     * @param string $consignmentId
     * @return \UnifaunWsdl\isOrdered
     */
    public function setConsignmentId($consignmentId)
    {
      $this->consignmentId = $consignmentId;
      return $this;
    }

}
