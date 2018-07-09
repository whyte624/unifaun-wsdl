<?php

namespace UnifaunWsdl;

class ServiceOptionItem
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $type
     * @param string $value
     */
    public function __construct($type, $value)
    {
      $this->type = $type;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \UnifaunWsdl\ServiceOptionItem
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \UnifaunWsdl\ServiceOptionItem
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
