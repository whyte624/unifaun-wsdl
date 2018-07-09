<?php

namespace UnifaunWsdl;

class consolidate
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string[] $arrayOfConsignmentNo
     */
    protected $arrayOfConsignmentNo = null;

    
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
     * @return \UnifaunWsdl\consolidate
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getArrayOfConsignmentNo()
    {
      return $this->arrayOfConsignmentNo;
    }

    /**
     * @param string[] $arrayOfConsignmentNo
     * @return \UnifaunWsdl\consolidate
     */
    public function setArrayOfConsignmentNo(array $arrayOfConsignmentNo = null)
    {
      $this->arrayOfConsignmentNo = $arrayOfConsignmentNo;
      return $this;
    }

}
