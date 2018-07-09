<?php

namespace UnifaunWsdl;

class Communication
{

    /**
     * @var string $contactPerson
     */
    protected $contactPerson = null;

    /**
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var mobile $mobile
     */
    protected $mobile = null;

    /**
     * @var string $fax
     */
    protected $fax = null;

    /**
     * @var email $email
     */
    protected $email = null;

    /**
     * @param string $contactPerson
     * @param string $phone
     * @param string $fax
     */
    public function __construct($contactPerson, $phone, $fax)
    {
      $this->contactPerson = $contactPerson;
      $this->phone = $phone;
      $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
      return $this->contactPerson;
    }

    /**
     * @param string $contactPerson
     * @return \UnifaunWsdl\Communication
     */
    public function setContactPerson($contactPerson)
    {
      $this->contactPerson = $contactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \UnifaunWsdl\Communication
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return mobile
     */
    public function getMobile()
    {
      return $this->mobile;
    }

    /**
     * @param mobile $mobile
     * @return \UnifaunWsdl\Communication
     */
    public function setMobile($mobile)
    {
      $this->mobile = $mobile;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->fax;
    }

    /**
     * @param string $fax
     * @return \UnifaunWsdl\Communication
     */
    public function setFax($fax)
    {
      $this->fax = $fax;
      return $this;
    }

    /**
     * @return email
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param email $email
     * @return \UnifaunWsdl\Communication
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}
