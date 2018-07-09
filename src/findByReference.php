<?php

namespace UnifaunWsdl;

class findByReference
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
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
     * @return \UnifaunWsdl\findByReference
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \UnifaunWsdl\findByReference
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \UnifaunWsdl\findByReference
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

}
