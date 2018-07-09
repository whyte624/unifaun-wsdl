<?php

namespace UnifaunWsdl;

class book
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
     * @var string $transactionId
     */
    protected $transactionId = null;

    
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
     * @return \UnifaunWsdl\book
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
     * @return \UnifaunWsdl\book
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
      return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return \UnifaunWsdl\book
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

}
