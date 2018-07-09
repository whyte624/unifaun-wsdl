<?php

namespace UnifaunWsdl;

class AuthenticationToken
{

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $groupName
     */
    protected $groupName = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \UnifaunWsdl\AuthenticationToken
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return \UnifaunWsdl\AuthenticationToken
     */
    public function setGroupName($groupName)
    {
      $this->groupName = $groupName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \UnifaunWsdl\AuthenticationToken
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
