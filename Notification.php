<?php

namespace UnifaunWsdl;

class Notification
{

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $role
     */
    protected $role = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMethod()
    {
      return $this->method;
    }

    /**
     * @param string $method
     * @return \UnifaunWsdl\Notification
     */
    public function setMethod($method)
    {
      $this->method = $method;
      return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param string $role
     * @return \UnifaunWsdl\Notification
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
