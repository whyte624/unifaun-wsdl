<?php

namespace UnifaunWsdl;

class CustomsClearance
{

    /**
     * @var string $customsDeclarationNo
     */
    protected $customsDeclarationNo = null;

    /**
     * @var string $customsDescription
     */
    protected $customsDescription = null;

    /**
     * @var string $customsReference
     */
    protected $customsReference = null;

    /**
     * @var string $countryOfOrigin
     */
    protected $countryOfOrigin = null;

    /**
     * @var string $invoiceNo
     */
    protected $invoiceNo = null;

    /**
     * @var date $invoiceDate
     */
    protected $invoiceDate = null;

    /**
     * @var float $goodsValue
     */
    protected $goodsValue = null;

    /**
     * @var string $goodsValueCurrency
     */
    protected $goodsValueCurrency = null;

    /**
     * @var string $statisticalNo
     */
    protected $statisticalNo = null;

    /**
     * @var boolean $dutiable
     */
    protected $dutiable = null;

    /**
     * @var string $documentType
     */
    protected $documentType = null;

    /**
     * @var string $goodsType
     */
    protected $goodsType = null;

    /**
     * @var string $goodsDescription
     */
    protected $goodsDescription = null;

    /**
     * @var float $netWeight
     */
    protected $netWeight = null;

    /**
     * @var int $numberOfGoodsItems
     */
    protected $numberOfGoodsItems = null;

    /**
     * @var string $positionInCompany
     */
    protected $positionInCompany = null;

    /**
     * @var string $priceRemarks
     */
    protected $priceRemarks = null;

    /**
     * @var string $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @param string $customsDeclarationNo
     * @param string $customsDescription
     * @param string $customsReference
     * @param string $countryOfOrigin
     * @param string $invoiceNo
     * @param date $invoiceDate
     * @param float $goodsValue
     * @param string $goodsValueCurrency
     * @param string $statisticalNo
     * @param boolean $dutiable
     * @param string $documentType
     * @param string $goodsType
     * @param string $goodsDescription
     * @param float $netWeight
     * @param int $numberOfGoodsItems
     * @param string $positionInCompany
     * @param string $priceRemarks
     * @param string $weightUnit
     */
    public function __construct($customsDeclarationNo, $customsDescription, $customsReference, $countryOfOrigin, $invoiceNo, $invoiceDate, $goodsValue, $goodsValueCurrency, $statisticalNo, $dutiable, $documentType, $goodsType, $goodsDescription, $netWeight, $numberOfGoodsItems, $positionInCompany, $priceRemarks, $weightUnit)
    {
      $this->customsDeclarationNo = $customsDeclarationNo;
      $this->customsDescription = $customsDescription;
      $this->customsReference = $customsReference;
      $this->countryOfOrigin = $countryOfOrigin;
      $this->invoiceNo = $invoiceNo;
      $this->invoiceDate = $invoiceDate;
      $this->goodsValue = $goodsValue;
      $this->goodsValueCurrency = $goodsValueCurrency;
      $this->statisticalNo = $statisticalNo;
      $this->dutiable = $dutiable;
      $this->documentType = $documentType;
      $this->goodsType = $goodsType;
      $this->goodsDescription = $goodsDescription;
      $this->netWeight = $netWeight;
      $this->numberOfGoodsItems = $numberOfGoodsItems;
      $this->positionInCompany = $positionInCompany;
      $this->priceRemarks = $priceRemarks;
      $this->weightUnit = $weightUnit;
    }

    /**
     * @return string
     */
    public function getCustomsDeclarationNo()
    {
      return $this->customsDeclarationNo;
    }

    /**
     * @param string $customsDeclarationNo
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setCustomsDeclarationNo($customsDeclarationNo)
    {
      $this->customsDeclarationNo = $customsDeclarationNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsDescription()
    {
      return $this->customsDescription;
    }

    /**
     * @param string $customsDescription
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setCustomsDescription($customsDescription)
    {
      $this->customsDescription = $customsDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomsReference()
    {
      return $this->customsReference;
    }

    /**
     * @param string $customsReference
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setCustomsReference($customsReference)
    {
      $this->customsReference = $customsReference;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin()
    {
      return $this->countryOfOrigin;
    }

    /**
     * @param string $countryOfOrigin
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
      $this->countryOfOrigin = $countryOfOrigin;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->invoiceNo;
    }

    /**
     * @param string $invoiceNo
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setInvoiceNo($invoiceNo)
    {
      $this->invoiceNo = $invoiceNo;
      return $this;
    }

    /**
     * @return date
     */
    public function getInvoiceDate()
    {
      return $this->invoiceDate;
    }

    /**
     * @param date $invoiceDate
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setInvoiceDate($invoiceDate)
    {
      $this->invoiceDate = $invoiceDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getGoodsValue()
    {
      return $this->goodsValue;
    }

    /**
     * @param float $goodsValue
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setGoodsValue($goodsValue)
    {
      $this->goodsValue = $goodsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsValueCurrency()
    {
      return $this->goodsValueCurrency;
    }

    /**
     * @param string $goodsValueCurrency
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setGoodsValueCurrency($goodsValueCurrency)
    {
      $this->goodsValueCurrency = $goodsValueCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatisticalNo()
    {
      return $this->statisticalNo;
    }

    /**
     * @param string $statisticalNo
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setStatisticalNo($statisticalNo)
    {
      $this->statisticalNo = $statisticalNo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDutiable()
    {
      return $this->dutiable;
    }

    /**
     * @param boolean $dutiable
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setDutiable($dutiable)
    {
      $this->dutiable = $dutiable;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentType()
    {
      return $this->documentType;
    }

    /**
     * @param string $documentType
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setDocumentType($documentType)
    {
      $this->documentType = $documentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsType()
    {
      return $this->goodsType;
    }

    /**
     * @param string $goodsType
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setGoodsType($goodsType)
    {
      $this->goodsType = $goodsType;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsDescription()
    {
      return $this->goodsDescription;
    }

    /**
     * @param string $goodsDescription
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setGoodsDescription($goodsDescription)
    {
      $this->goodsDescription = $goodsDescription;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetWeight()
    {
      return $this->netWeight;
    }

    /**
     * @param float $netWeight
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setNetWeight($netWeight)
    {
      $this->netWeight = $netWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfGoodsItems()
    {
      return $this->numberOfGoodsItems;
    }

    /**
     * @param int $numberOfGoodsItems
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setNumberOfGoodsItems($numberOfGoodsItems)
    {
      $this->numberOfGoodsItems = $numberOfGoodsItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getPositionInCompany()
    {
      return $this->positionInCompany;
    }

    /**
     * @param string $positionInCompany
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setPositionInCompany($positionInCompany)
    {
      $this->positionInCompany = $positionInCompany;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceRemarks()
    {
      return $this->priceRemarks;
    }

    /**
     * @param string $priceRemarks
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setPriceRemarks($priceRemarks)
    {
      $this->priceRemarks = $priceRemarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
      return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     * @return \UnifaunWsdl\CustomsClearance
     */
    public function setWeightUnit($weightUnit)
    {
      $this->weightUnit = $weightUnit;
      return $this;
    }

}
