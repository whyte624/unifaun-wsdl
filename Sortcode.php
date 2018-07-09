<?php

namespace UnifaunWsdl;

class Sortcode
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @param string $code
     * @param int $quantity
     */
    public function __construct($code, $quantity)
    {
      $this->code = $code;
      $this->quantity = $quantity;
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
     * @return \UnifaunWsdl\Sortcode
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \UnifaunWsdl\Sortcode
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

}
