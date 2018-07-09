<?php

namespace UnifaunWsdl;

class GoodsItem
{

    /**
     * @var int $noOfPackages
     */
    protected $noOfPackages = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var float $volume
     */
    protected $volume = null;

    /**
     * @var float $length
     */
    protected $length = null;

    /**
     * @var float $width
     */
    protected $width = null;

    /**
     * @var float $height
     */
    protected $height = null;

    /**
     * @var float $loadingMetres
     */
    protected $loadingMetres = null;

    /**
     * @var int $palletSpace
     */
    protected $palletSpace = null;

    /**
     * @var string $packageType
     */
    protected $packageType = null;

    /**
     * @var string $tag
     */
    protected $tag = null;

    /**
     * @var string $goodsType
     */
    protected $goodsType = null;

    /**
     * @var float $netWeight
     */
    protected $netWeight = null;

    /**
     * @var string $weightUnit
     */
    protected $weightUnit = null;

    /**
     * @var string $volumeUnit
     */
    protected $volumeUnit = null;

    /**
     * @var string $lengthUnit
     */
    protected $lengthUnit = null;

    /**
     * @var boolean $stackable
     */
    protected $stackable = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var PackageIds $PackageIds
     */
    protected $PackageIds = null;

    /**
     * @var DangerousGoods $DangerousGoods
     */
    protected $DangerousGoods = null;

    /**
     * @param int $noOfPackages
     * @param float $weight
     * @param float $volume
     * @param float $length
     * @param float $width
     * @param float $height
     * @param float $loadingMetres
     * @param int $palletSpace
     * @param string $packageType
     * @param string $tag
     * @param string $goodsType
     * @param float $netWeight
     * @param string $weightUnit
     * @param string $volumeUnit
     * @param string $lengthUnit
     * @param boolean $stackable
     * @param string $notes
     */
    public function __construct($noOfPackages, $weight, $volume, $length, $width, $height, $loadingMetres, $palletSpace, $packageType, $tag, $goodsType, $netWeight, $weightUnit, $volumeUnit, $lengthUnit, $stackable, $notes)
    {
      $this->noOfPackages = $noOfPackages;
      $this->weight = $weight;
      $this->volume = $volume;
      $this->length = $length;
      $this->width = $width;
      $this->height = $height;
      $this->loadingMetres = $loadingMetres;
      $this->palletSpace = $palletSpace;
      $this->packageType = $packageType;
      $this->tag = $tag;
      $this->goodsType = $goodsType;
      $this->netWeight = $netWeight;
      $this->weightUnit = $weightUnit;
      $this->volumeUnit = $volumeUnit;
      $this->lengthUnit = $lengthUnit;
      $this->stackable = $stackable;
      $this->notes = $notes;
    }

    /**
     * @return int
     */
    public function getNoOfPackages()
    {
      return $this->noOfPackages;
    }

    /**
     * @param int $noOfPackages
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setNoOfPackages($noOfPackages)
    {
      $this->noOfPackages = $noOfPackages;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param float $weight
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->volume;
    }

    /**
     * @param float $volume
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setVolume($volume)
    {
      $this->volume = $volume;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param float $length
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param float $width
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param float $height
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoadingMetres()
    {
      return $this->loadingMetres;
    }

    /**
     * @param float $loadingMetres
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setLoadingMetres($loadingMetres)
    {
      $this->loadingMetres = $loadingMetres;
      return $this;
    }

    /**
     * @return int
     */
    public function getPalletSpace()
    {
      return $this->palletSpace;
    }

    /**
     * @param int $palletSpace
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setPalletSpace($palletSpace)
    {
      $this->palletSpace = $palletSpace;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
      return $this->packageType;
    }

    /**
     * @param string $packageType
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setPackageType($packageType)
    {
      $this->packageType = $packageType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
      return $this->tag;
    }

    /**
     * @param string $tag
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setTag($tag)
    {
      $this->tag = $tag;
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
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setGoodsType($goodsType)
    {
      $this->goodsType = $goodsType;
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
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setNetWeight($netWeight)
    {
      $this->netWeight = $netWeight;
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
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setWeightUnit($weightUnit)
    {
      $this->weightUnit = $weightUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getVolumeUnit()
    {
      return $this->volumeUnit;
    }

    /**
     * @param string $volumeUnit
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setVolumeUnit($volumeUnit)
    {
      $this->volumeUnit = $volumeUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getLengthUnit()
    {
      return $this->lengthUnit;
    }

    /**
     * @param string $lengthUnit
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setLengthUnit($lengthUnit)
    {
      $this->lengthUnit = $lengthUnit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStackable()
    {
      return $this->stackable;
    }

    /**
     * @param boolean $stackable
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setStackable($stackable)
    {
      $this->stackable = $stackable;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return PackageIds
     */
    public function getPackageIds()
    {
      return $this->PackageIds;
    }

    /**
     * @param PackageIds $PackageIds
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setPackageIds($PackageIds)
    {
      $this->PackageIds = $PackageIds;
      return $this;
    }

    /**
     * @return DangerousGoods
     */
    public function getDangerousGoods()
    {
      return $this->DangerousGoods;
    }

    /**
     * @param DangerousGoods $DangerousGoods
     * @return \UnifaunWsdl\GoodsItem
     */
    public function setDangerousGoods($DangerousGoods)
    {
      $this->DangerousGoods = $DangerousGoods;
      return $this;
    }

}
