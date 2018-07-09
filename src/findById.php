<?php

namespace UnifaunWsdl;

class findById
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param int $id
     */
    public function __construct($id)
    {
      $this->id = $id;
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
     * @return \UnifaunWsdl\findById
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \UnifaunWsdl\findById
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

}
