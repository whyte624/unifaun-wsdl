<?php

namespace UnifaunWsdl;

class ServiceException
{

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \UnifaunWsdl\ServiceException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
