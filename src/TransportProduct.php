<?php

namespace UnifaunWsdl;

class TransportProduct
{

    /**
     * @var string $mode
     */
    protected $mode = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var PaymentInstruction $PaymentInstruction
     */
    protected $PaymentInstruction = null;

    /**
     * @var AddService[] $AddService
     */
    protected $AddService = null;

    /**
     * @var boolean $advice
     */
    protected $advice = null;

    /**
     * @var Tod $Tod
     */
    protected $Tod = null;

    /**
     * @var Cod $Cod
     */
    protected $Cod = null;

    /**
     * @var Pickup $Pickup
     */
    protected $Pickup = null;

    /**
     * @var Delivery $Delivery
     */
    protected $Delivery = null;

    /**
     * @var Transport $Transport
     */
    protected $Transport = null;

    /**
     * @var CustomsClearance[] $CustomsClearance
     */
    protected $CustomsClearance = null;

    /**
     * @var Sortcode $Sortcode
     */
    protected $Sortcode = null;

    /**
     * @var Insurance $Insurance
     */
    protected $Insurance = null;

    /**
     * @var ServiceOption[] $ServiceOption
     */
    protected $ServiceOption = null;

    /**
     * @param string $mode
     * @param string $code
     * @param boolean $advice
     */
    public function __construct($mode, $code, $advice)
    {
      $this->mode = $mode;
      $this->code = $code;
      $this->advice = $advice;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->mode;
    }

    /**
     * @param string $mode
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setMode($mode)
    {
      $this->mode = $mode;
      return $this;
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
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return PaymentInstruction
     */
    public function getPaymentInstruction()
    {
      return $this->PaymentInstruction;
    }

    /**
     * @param PaymentInstruction $PaymentInstruction
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setPaymentInstruction($PaymentInstruction)
    {
      $this->PaymentInstruction = $PaymentInstruction;
      return $this;
    }

    /**
     * @return AddService[]
     */
    public function getAddService()
    {
      return $this->AddService;
    }

    /**
     * @param AddService[] $AddService
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setAddService(array $AddService = null)
    {
      $this->AddService = $AddService;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAdvice()
    {
      return $this->advice;
    }

    /**
     * @param boolean $advice
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setAdvice($advice)
    {
      $this->advice = $advice;
      return $this;
    }

    /**
     * @return Tod
     */
    public function getTod()
    {
      return $this->Tod;
    }

    /**
     * @param Tod $Tod
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setTod($Tod)
    {
      $this->Tod = $Tod;
      return $this;
    }

    /**
     * @return Cod
     */
    public function getCod()
    {
      return $this->Cod;
    }

    /**
     * @param Cod $Cod
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setCod($Cod)
    {
      $this->Cod = $Cod;
      return $this;
    }

    /**
     * @return Pickup
     */
    public function getPickup()
    {
      return $this->Pickup;
    }

    /**
     * @param Pickup $Pickup
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setPickup($Pickup)
    {
      $this->Pickup = $Pickup;
      return $this;
    }

    /**
     * @return Delivery
     */
    public function getDelivery()
    {
      return $this->Delivery;
    }

    /**
     * @param Delivery $Delivery
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setDelivery($Delivery)
    {
      $this->Delivery = $Delivery;
      return $this;
    }

    /**
     * @return Transport
     */
    public function getTransport()
    {
      return $this->Transport;
    }

    /**
     * @param Transport $Transport
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setTransport($Transport)
    {
      $this->Transport = $Transport;
      return $this;
    }

    /**
     * @return CustomsClearance[]
     */
    public function getCustomsClearance()
    {
      return $this->CustomsClearance;
    }

    /**
     * @param CustomsClearance[] $CustomsClearance
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setCustomsClearance(array $CustomsClearance = null)
    {
      $this->CustomsClearance = $CustomsClearance;
      return $this;
    }

    /**
     * @return Sortcode
     */
    public function getSortcode()
    {
      return $this->Sortcode;
    }

    /**
     * @param Sortcode $Sortcode
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setSortcode($Sortcode)
    {
      $this->Sortcode = $Sortcode;
      return $this;
    }

    /**
     * @return Insurance
     */
    public function getInsurance()
    {
      return $this->Insurance;
    }

    /**
     * @param Insurance $Insurance
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setInsurance($Insurance)
    {
      $this->Insurance = $Insurance;
      return $this;
    }

    /**
     * @return ServiceOption[]
     */
    public function getServiceOption()
    {
      return $this->ServiceOption;
    }

    /**
     * @param ServiceOption[] $ServiceOption
     * @return \UnifaunWsdl\TransportProduct
     */
    public function setServiceOption(array $ServiceOption = null)
    {
      $this->ServiceOption = $ServiceOption;
      return $this;
    }

}
