<?php

namespace UnifaunWsdl;

class Reference
{

    /**
     * @var string $customerNo
     */
    protected $customerNo = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $accountNo
     */
    protected $accountNo = null;

    /**
     * @var string $eanCustomerNo
     */
    protected $eanCustomerNo = null;

    /**
     * @var string $palletRegNo
     */
    protected $palletRegNo = null;

    /**
     * @var string $vatNo
     */
    protected $vatNo = null;

    /**
     * @param string $customerNo
     * @param string $reference
     * @param string $accountNo
     * @param string $eanCustomerNo
     * @param string $palletRegNo
     * @param string $vatNo
     */
    public function __construct($customerNo, $reference, $accountNo, $eanCustomerNo, $palletRegNo, $vatNo)
    {
      $this->customerNo = $customerNo;
      $this->reference = $reference;
      $this->accountNo = $accountNo;
      $this->eanCustomerNo = $eanCustomerNo;
      $this->palletRegNo = $palletRegNo;
      $this->vatNo = $vatNo;
    }

    /**
     * @return string
     */
    public function getCustomerNo()
    {
      return $this->customerNo;
    }

    /**
     * @param string $customerNo
     * @return \UnifaunWsdl\Reference
     */
    public function setCustomerNo($customerNo)
    {
      $this->customerNo = $customerNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \UnifaunWsdl\Reference
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountNo()
    {
      return $this->accountNo;
    }

    /**
     * @param string $accountNo
     * @return \UnifaunWsdl\Reference
     */
    public function setAccountNo($accountNo)
    {
      $this->accountNo = $accountNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getEanCustomerNo()
    {
      return $this->eanCustomerNo;
    }

    /**
     * @param string $eanCustomerNo
     * @return \UnifaunWsdl\Reference
     */
    public function setEanCustomerNo($eanCustomerNo)
    {
      $this->eanCustomerNo = $eanCustomerNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPalletRegNo()
    {
      return $this->palletRegNo;
    }

    /**
     * @param string $palletRegNo
     * @return \UnifaunWsdl\Reference
     */
    public function setPalletRegNo($palletRegNo)
    {
      $this->palletRegNo = $palletRegNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatNo()
    {
      return $this->vatNo;
    }

    /**
     * @param string $vatNo
     * @return \UnifaunWsdl\Reference
     */
    public function setVatNo($vatNo)
    {
      $this->vatNo = $vatNo;
      return $this;
    }

}
