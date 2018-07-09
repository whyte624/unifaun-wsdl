<?php

namespace UnifaunWsdl;

class ConsignmentReference
{

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
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \UnifaunWsdl\ConsignmentReference
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
     * @return \UnifaunWsdl\ConsignmentReference
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
