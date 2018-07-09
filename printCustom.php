<?php

namespace UnifaunWsdl;

class printCustom
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string[] $arrayOfConsignmentNo
     */
    protected $arrayOfConsignmentNo = null;

    /**
     * @var int $type
     */
    protected $type = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @param int $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return AuthenticationToken
     */
    public function getAuthenticationToken()
    {
      return $this->AuthenticationToken;
    }

    /**
     * @param AuthenticationToken $AuthenticationToken
     * @return \UnifaunWsdl\print
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getArrayOfConsignmentNo()
    {
      return $this->arrayOfConsignmentNo;
    }

    /**
     * @param string[] $arrayOfConsignmentNo
     * @return \UnifaunWsdl\print
     */
    public function setArrayOfConsignmentNo(array $arrayOfConsignmentNo = null)
    {
      $this->arrayOfConsignmentNo = $arrayOfConsignmentNo;
      return $this;
    }

    /**
     * @return int
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param int $type
     * @return \UnifaunWsdl\print
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param string $format
     * @return \UnifaunWsdl\print
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

}
