<?php

namespace UnifaunWsdl;

class DangerousGoods
{

    /**
     * @var string $unNo
     */
    protected $unNo = null;

    /**
     * @var string $adrClass
     */
    protected $adrClass = null;

    /**
     * @var string $packGroup
     */
    protected $packGroup = null;

    /**
     * @var float $weight
     */
    protected $weight = null;

    /**
     * @var float $netWeight
     */
    protected $netWeight = null;

    /**
     * @var string $netWeightExplSub
     */
    protected $netWeightExplSub = null;

    /**
     * @var int $noOfPackages
     */
    protected $noOfPackages = null;

    /**
     * @var string $packageType
     */
    protected $packageType = null;

    /**
     * @var string $mp
     */
    protected $mp = null;

    /**
     * @var string $flamePoint
     */
    protected $flamePoint = null;

    /**
     * @var string $lq
     */
    protected $lq = null;

    /**
     * @var Category $Category
     */
    protected $Category = null;

    /**
     * @var string $ems
     */
    protected $ems = null;

    /**
     * @var string $sp
     */
    protected $sp = null;

    /**
     * @var string $tunnelRestrictionCode
     */
    protected $tunnelRestrictionCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $unNo
     * @param string $adrClass
     * @param string $packGroup
     * @param float $weight
     * @param float $netWeight
     * @param string $netWeightExplSub
     * @param int $noOfPackages
     * @param string $packageType
     * @param string $mp
     * @param string $flamePoint
     * @param string $lq
     * @param string $ems
     * @param string $sp
     * @param string $tunnelRestrictionCode
     * @param string $description
     */
    public function __construct($unNo, $adrClass, $packGroup, $weight, $netWeight, $netWeightExplSub, $noOfPackages, $packageType, $mp, $flamePoint, $lq, $ems, $sp, $tunnelRestrictionCode, $description)
    {
      $this->unNo = $unNo;
      $this->adrClass = $adrClass;
      $this->packGroup = $packGroup;
      $this->weight = $weight;
      $this->netWeight = $netWeight;
      $this->netWeightExplSub = $netWeightExplSub;
      $this->noOfPackages = $noOfPackages;
      $this->packageType = $packageType;
      $this->mp = $mp;
      $this->flamePoint = $flamePoint;
      $this->lq = $lq;
      $this->ems = $ems;
      $this->sp = $sp;
      $this->tunnelRestrictionCode = $tunnelRestrictionCode;
      $this->description = $description;
    }

    /**
     * @return string
     */
    public function getUnNo()
    {
      return $this->unNo;
    }

    /**
     * @param string $unNo
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setUnNo($unNo)
    {
      $this->unNo = $unNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdrClass()
    {
      return $this->adrClass;
    }

    /**
     * @param string $adrClass
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setAdrClass($adrClass)
    {
      $this->adrClass = $adrClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackGroup()
    {
      return $this->packGroup;
    }

    /**
     * @param string $packGroup
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setPackGroup($packGroup)
    {
      $this->packGroup = $packGroup;
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
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
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
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setNetWeight($netWeight)
    {
      $this->netWeight = $netWeight;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetWeightExplSub()
    {
      return $this->netWeightExplSub;
    }

    /**
     * @param string $netWeightExplSub
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setNetWeightExplSub($netWeightExplSub)
    {
      $this->netWeightExplSub = $netWeightExplSub;
      return $this;
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
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setNoOfPackages($noOfPackages)
    {
      $this->noOfPackages = $noOfPackages;
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
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setPackageType($packageType)
    {
      $this->packageType = $packageType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMp()
    {
      return $this->mp;
    }

    /**
     * @param string $mp
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setMp($mp)
    {
      $this->mp = $mp;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlamePoint()
    {
      return $this->flamePoint;
    }

    /**
     * @param string $flamePoint
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setFlamePoint($flamePoint)
    {
      $this->flamePoint = $flamePoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getLq()
    {
      return $this->lq;
    }

    /**
     * @param string $lq
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setLq($lq)
    {
      $this->lq = $lq;
      return $this;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param Category $Category
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getEms()
    {
      return $this->ems;
    }

    /**
     * @param string $ems
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setEms($ems)
    {
      $this->ems = $ems;
      return $this;
    }

    /**
     * @return string
     */
    public function getSp()
    {
      return $this->sp;
    }

    /**
     * @param string $sp
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setSp($sp)
    {
      $this->sp = $sp;
      return $this;
    }

    /**
     * @return string
     */
    public function getTunnelRestrictionCode()
    {
      return $this->tunnelRestrictionCode;
    }

    /**
     * @param string $tunnelRestrictionCode
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setTunnelRestrictionCode($tunnelRestrictionCode)
    {
      $this->tunnelRestrictionCode = $tunnelRestrictionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \UnifaunWsdl\DangerousGoods
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
