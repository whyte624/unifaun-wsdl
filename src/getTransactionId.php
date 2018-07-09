<?php

namespace UnifaunWsdl;

class getTransactionId
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    
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
     * @return \UnifaunWsdl\getTransactionId
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

}
