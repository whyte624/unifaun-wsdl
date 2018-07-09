<?php

namespace UnifaunWsdl;

class copy
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var Consignment $Consignment
     */
    protected $Consignment = null;

    
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
     * @return \UnifaunWsdl\copy
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return Consignment
     */
    public function getConsignment()
    {
      return $this->Consignment;
    }

    /**
     * @param Consignment $Consignment
     * @return \UnifaunWsdl\copy
     */
    public function setConsignment($Consignment)
    {
      $this->Consignment = $Consignment;
      return $this;
    }

}
