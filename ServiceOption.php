<?php

namespace UnifaunWsdl;

class ServiceOption
{

    /**
     * @var ServiceOptionItem[] $ServiceOptionItem
     */
    protected $ServiceOptionItem = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param string $value
     * @param string $type
     */
    public function __construct($value, $type)
    {
      $this->value = $value;
      $this->type = $type;
    }

    /**
     * @return ServiceOptionItem[]
     */
    public function getServiceOptionItem()
    {
      return $this->ServiceOptionItem;
    }

    /**
     * @param ServiceOptionItem[] $ServiceOptionItem
     * @return \UnifaunWsdl\ServiceOption
     */
    public function setServiceOptionItem(array $ServiceOptionItem = null)
    {
      $this->ServiceOptionItem = $ServiceOptionItem;
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
     * @return \UnifaunWsdl\ServiceOption
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
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
     * @return \UnifaunWsdl\ServiceOption
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
