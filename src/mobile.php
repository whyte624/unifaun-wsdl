<?php

namespace UnifaunWsdl;

class mobile
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var boolean $notify
     */
    protected $notify = null;

    /**
     * @param string $_
     * @param boolean $notify
     */
    public function __construct($_, $notify)
    {
      $this->_ = $_;
      $this->notify = $notify;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \UnifaunWsdl\mobile
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNotify()
    {
      return $this->notify;
    }

    /**
     * @param boolean $notify
     * @return \UnifaunWsdl\mobile
     */
    public function setNotify($notify)
    {
      $this->notify = $notify;
      return $this;
    }

}
