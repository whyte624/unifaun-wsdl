<?php

namespace UnifaunWsdl;

class addGoodsRow
{

    /**
     * @var AuthenticationToken $AuthenticationToken
     */
    protected $AuthenticationToken = null;

    /**
     * @var GoodsItem $GoodsItem
     */
    protected $GoodsItem = null;

    /**
     * @var string $consignmentMergeKey
     */
    protected $consignmentMergeKey = null;

    /**
     * @param GoodsItem $GoodsItem
     * @param string $consignmentMergeKey
     */
    public function __construct($GoodsItem, $consignmentMergeKey)
    {
      $this->GoodsItem = $GoodsItem;
      $this->consignmentMergeKey = $consignmentMergeKey;
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
     * @return \UnifaunWsdl\addGoodsRow
     */
    public function setAuthenticationToken($AuthenticationToken)
    {
      $this->AuthenticationToken = $AuthenticationToken;
      return $this;
    }

    /**
     * @return GoodsItem
     */
    public function getGoodsItem()
    {
      return $this->GoodsItem;
    }

    /**
     * @param GoodsItem $GoodsItem
     * @return \UnifaunWsdl\addGoodsRow
     */
    public function setGoodsItem($GoodsItem)
    {
      $this->GoodsItem = $GoodsItem;
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
     * @return \UnifaunWsdl\addGoodsRow
     */
    public function setConsignmentMergeKey($consignmentMergeKey)
    {
      $this->consignmentMergeKey = $consignmentMergeKey;
      return $this;
    }

}
