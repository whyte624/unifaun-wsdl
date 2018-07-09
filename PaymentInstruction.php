<?php

namespace UnifaunWsdl;

class PaymentInstruction
{

    /**
     * @var anonymous23 $value
     */
    protected $value = null;

    /**
     * @param anonymous23 $value
     */
    public function __construct($value)
    {
      $this->value = $value;
    }

    /**
     * @return anonymous23
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param anonymous23 $value
     * @return \UnifaunWsdl\PaymentInstruction
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
