<?php

namespace UnifaunWsdl;

class Transport
{

    /**
     * @var string $instruction
     */
    protected $instruction = null;

    /**
     * @var boolean $cooling
     */
    protected $cooling = null;

    /**
     * @var boolean $heating
     */
    protected $heating = null;

    /**
     * @var boolean $frozen
     */
    protected $frozen = null;

    /**
     * @var int $tempLow
     */
    protected $tempLow = null;

    /**
     * @var int $tempHigh
     */
    protected $tempHigh = null;

    /**
     * @var string $subsidyNo
     */
    protected $subsidyNo = null;

    /**
     * @var boolean $valuableGoods
     */
    protected $valuableGoods = null;

    /**
     * @var boolean $carryIn
     */
    protected $carryIn = null;

    /**
     * @var boolean $extraCrew
     */
    protected $extraCrew = null;

    /**
     * @var int $eurPallets
     */
    protected $eurPallets = null;

    /**
     * @var boolean $limitedQuantityDangerousGoods
     */
    protected $limitedQuantityDangerousGoods = null;

    /**
     * @param string $instruction
     * @param boolean $cooling
     * @param boolean $heating
     * @param boolean $frozen
     * @param int $tempLow
     * @param int $tempHigh
     * @param string $subsidyNo
     * @param boolean $valuableGoods
     * @param boolean $carryIn
     * @param boolean $extraCrew
     * @param int $eurPallets
     * @param boolean $limitedQuantityDangerousGoods
     */
    public function __construct($instruction, $cooling, $heating, $frozen, $tempLow, $tempHigh, $subsidyNo, $valuableGoods, $carryIn, $extraCrew, $eurPallets, $limitedQuantityDangerousGoods)
    {
      $this->instruction = $instruction;
      $this->cooling = $cooling;
      $this->heating = $heating;
      $this->frozen = $frozen;
      $this->tempLow = $tempLow;
      $this->tempHigh = $tempHigh;
      $this->subsidyNo = $subsidyNo;
      $this->valuableGoods = $valuableGoods;
      $this->carryIn = $carryIn;
      $this->extraCrew = $extraCrew;
      $this->eurPallets = $eurPallets;
      $this->limitedQuantityDangerousGoods = $limitedQuantityDangerousGoods;
    }

    /**
     * @return string
     */
    public function getInstruction()
    {
      return $this->instruction;
    }

    /**
     * @param string $instruction
     * @return \UnifaunWsdl\Transport
     */
    public function setInstruction($instruction)
    {
      $this->instruction = $instruction;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCooling()
    {
      return $this->cooling;
    }

    /**
     * @param boolean $cooling
     * @return \UnifaunWsdl\Transport
     */
    public function setCooling($cooling)
    {
      $this->cooling = $cooling;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHeating()
    {
      return $this->heating;
    }

    /**
     * @param boolean $heating
     * @return \UnifaunWsdl\Transport
     */
    public function setHeating($heating)
    {
      $this->heating = $heating;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFrozen()
    {
      return $this->frozen;
    }

    /**
     * @param boolean $frozen
     * @return \UnifaunWsdl\Transport
     */
    public function setFrozen($frozen)
    {
      $this->frozen = $frozen;
      return $this;
    }

    /**
     * @return int
     */
    public function getTempLow()
    {
      return $this->tempLow;
    }

    /**
     * @param int $tempLow
     * @return \UnifaunWsdl\Transport
     */
    public function setTempLow($tempLow)
    {
      $this->tempLow = $tempLow;
      return $this;
    }

    /**
     * @return int
     */
    public function getTempHigh()
    {
      return $this->tempHigh;
    }

    /**
     * @param int $tempHigh
     * @return \UnifaunWsdl\Transport
     */
    public function setTempHigh($tempHigh)
    {
      $this->tempHigh = $tempHigh;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubsidyNo()
    {
      return $this->subsidyNo;
    }

    /**
     * @param string $subsidyNo
     * @return \UnifaunWsdl\Transport
     */
    public function setSubsidyNo($subsidyNo)
    {
      $this->subsidyNo = $subsidyNo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValuableGoods()
    {
      return $this->valuableGoods;
    }

    /**
     * @param boolean $valuableGoods
     * @return \UnifaunWsdl\Transport
     */
    public function setValuableGoods($valuableGoods)
    {
      $this->valuableGoods = $valuableGoods;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCarryIn()
    {
      return $this->carryIn;
    }

    /**
     * @param boolean $carryIn
     * @return \UnifaunWsdl\Transport
     */
    public function setCarryIn($carryIn)
    {
      $this->carryIn = $carryIn;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtraCrew()
    {
      return $this->extraCrew;
    }

    /**
     * @param boolean $extraCrew
     * @return \UnifaunWsdl\Transport
     */
    public function setExtraCrew($extraCrew)
    {
      $this->extraCrew = $extraCrew;
      return $this;
    }

    /**
     * @return int
     */
    public function getEurPallets()
    {
      return $this->eurPallets;
    }

    /**
     * @param int $eurPallets
     * @return \UnifaunWsdl\Transport
     */
    public function setEurPallets($eurPallets)
    {
      $this->eurPallets = $eurPallets;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLimitedQuantityDangerousGoods()
    {
      return $this->limitedQuantityDangerousGoods;
    }

    /**
     * @param boolean $limitedQuantityDangerousGoods
     * @return \UnifaunWsdl\Transport
     */
    public function setLimitedQuantityDangerousGoods($limitedQuantityDangerousGoods)
    {
      $this->limitedQuantityDangerousGoods = $limitedQuantityDangerousGoods;
      return $this;
    }

}
