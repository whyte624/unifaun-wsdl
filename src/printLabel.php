<?php

namespace UnifaunWsdl;

class printLabel
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    /**
     * @var string[] $arrayOfPackageIds
     */
    protected $arrayOfPackageIds = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @param string $consignmentNo
     * @param string[] $arrayOfPackageIds
     */
    public function __construct($consignmentNo, array $arrayOfPackageIds)
    {
      $this->consignmentNo = $consignmentNo;
      $this->arrayOfPackageIds = $arrayOfPackageIds;
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
     * @return \UnifaunWsdl\printLabel
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentNo()
    {
      return $this->consignmentNo;
    }

    /**
     * @param string $consignmentNo
     * @return \UnifaunWsdl\printLabel
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getArrayOfPackageIds()
    {
      return $this->arrayOfPackageIds;
    }

    /**
     * @param string[] $arrayOfPackageIds
     * @return \UnifaunWsdl\printLabel
     */
    public function setArrayOfPackageIds(array $arrayOfPackageIds)
    {
      $this->arrayOfPackageIds = $arrayOfPackageIds;
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
     * @return \UnifaunWsdl\printLabel
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

}
