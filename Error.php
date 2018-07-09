<?php

namespace UnifaunWsdl;

class Error
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $level
     */
    protected $level = null;

    /**
     * @param int $level
     */
    public function __construct($level)
    {
      $this->level = $level;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \UnifaunWsdl\Error
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \UnifaunWsdl\Error
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param int $level
     * @return \UnifaunWsdl\Error
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

}
