<?php

namespace UnifaunWsdl;

class save
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var Consignment $Consignment
     */
    protected $Consignment = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    
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
     * @return \UnifaunWsdl\save
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
     * @return \UnifaunWsdl\save
     */
    public function setConsignment($Consignment)
    {
      $this->Consignment = $Consignment;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \UnifaunWsdl\save
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

}
