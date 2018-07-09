<?php

namespace UnifaunWsdl;

class getCalculatedPrice
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
     * @return \UnifaunWsdl\getCalculatedPrice
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
     * @return \UnifaunWsdl\getCalculatedPrice
     */
    public function setArrayOfConsignmentNo(array $arrayOfConsignmentNo = null)
    {
      $this->arrayOfConsignmentNo = $arrayOfConsignmentNo;
      return $this;
    }

}
