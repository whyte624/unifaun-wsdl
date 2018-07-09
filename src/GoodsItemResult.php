<?php

namespace UnifaunWsdl;

class GoodsItemResult
{

    /**
     * @var string $consignmentMergeKey
     */
    protected $consignmentMergeKey = null;

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    /**
     * @var string $addedPackageId
     */
    protected $addedPackageId = null;

    /**
     * @var string $deletedPackageId
     */
    protected $deletedPackageId = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    /**
     * @param string $consignmentMergeKey
     * @param string $consignmentNo
     */
    public function __construct($consignmentMergeKey, $consignmentNo)
    {
      $this->consignmentMergeKey = $consignmentMergeKey;
      $this->consignmentNo = $consignmentNo;
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
     * @return \UnifaunWsdl\GoodsItemResult
     */
    public function setConsignmentMergeKey($consignmentMergeKey)
    {
      $this->consignmentMergeKey = $consignmentMergeKey;
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
     * @return \UnifaunWsdl\GoodsItemResult
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddedPackageId()
    {
      return $this->addedPackageId;
    }

    /**
     * @param string $addedPackageId
     * @return \UnifaunWsdl\GoodsItemResult
     */
    public function setAddedPackageId($addedPackageId)
    {
      $this->addedPackageId = $addedPackageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeletedPackageId()
    {
      return $this->deletedPackageId;
    }

    /**
     * @param string $deletedPackageId
     * @return \UnifaunWsdl\GoodsItemResult
     */
    public function setDeletedPackageId($deletedPackageId)
    {
      $this->deletedPackageId = $deletedPackageId;
      return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \UnifaunWsdl\GoodsItemResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

}
