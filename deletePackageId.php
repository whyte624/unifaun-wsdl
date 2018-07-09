<?php

namespace UnifaunWsdl;

class deletePackageId
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var string $consignmentMergeKey
     */
    protected $consignmentMergeKey = null;

    /**
     * @var string $packageId
     */
    protected $packageId = null;

    /**
     * @param string $consignmentMergeKey
     * @param string $packageId
     */
    public function __construct($consignmentMergeKey, $packageId)
    {
      $this->consignmentMergeKey = $consignmentMergeKey;
      $this->packageId = $packageId;
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
     * @return \UnifaunWsdl\deletePackageId
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentMergeKey()
    {
      return $this->consignmentMergeKey;
    }

    /**
     * @param string $consignmentMergeKey
     * @return \UnifaunWsdl\deletePackageId
     */
    public function setConsignmentMergeKey($consignmentMergeKey)
    {
      $this->consignmentMergeKey = $consignmentMergeKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageId()
    {
      return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return \UnifaunWsdl\deletePackageId
     */
    public function setPackageId($packageId)
    {
      $this->packageId = $packageId;
      return $this;
    }

}
