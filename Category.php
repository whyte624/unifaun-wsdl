<?php

namespace UnifaunWsdl;

class Category
{

    /**
     * @var anonymous14 $value
     */
    protected $value = null;

    /**
     * @param anonymous14 $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return anonymous14
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param anonymous14 $value
     * @return \UnifaunWsdl\Category
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
