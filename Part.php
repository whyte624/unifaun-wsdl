<?php

namespace UnifaunWsdl;

class Part
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var Communication $Communication
     */
    protected $Communication = null;

    /**
     * @var Reference $Reference
     */
    protected $Reference = null;

    /**
     * @var anonymous3 $role
     */
    protected $role = null;

    /**
     * @var string $account
     */
    protected $account = null;

    /**
     * @param Address $Address
     * @param anonymous3 $role
     * @param string $account
     */
    public function __construct($Address, $role, $account)
    {
      $this->Address = $Address;
      $this->role = $role;
      $this->account = $account;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \UnifaunWsdl\Part
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Communication
     */
    public function getCommunication()
    {
      return $this->Communication;
    }

    /**
     * @param Communication $Communication
     * @return \UnifaunWsdl\Part
     */
    public function setCommunication($Communication)
    {
      $this->Communication = $Communication;
      return $this;
    }

    /**
     * @return Reference
     */
    public function getReference()
    {
      return $this->Reference;
    }

    /**
     * @param Reference $Reference
     * @return \UnifaunWsdl\Part
     */
    public function setReference($Reference)
    {
      $this->Reference = $Reference;
      return $this;
    }

    /**
     * @return anonymous3
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param anonymous3 $role
     * @return \UnifaunWsdl\Part
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param string $account
     * @return \UnifaunWsdl\Part
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
