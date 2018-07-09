<?php

namespace UnifaunWsdl;

class GoodsInvoice
{

    /**
     * @var string $invoiceNo
     */
    protected $invoiceNo = null;

    /**
     * @var date $invoiceDate
     */
    protected $invoiceDate = null;

    /**
     * @var string $orderNo
     */
    protected $orderNo = null;

    /**
     * @var string $termsOfPayment
     */
    protected $termsOfPayment = null;

    /**
     * @var string $discount
     */
    protected $discount = null;

    /**
     * @var float $freightCost
     */
    protected $freightCost = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var InvoiceNote[] $InvoiceNote
     */
    protected $InvoiceNote = null;

    /**
     * @param string $invoiceNo
     * @param date $invoiceDate
     * @param string $orderNo
     * @param string $termsOfPayment
     * @param string $discount
     * @param float $freightCost
     * @param string $currency
     */
    public function __construct($invoiceNo, $invoiceDate, $orderNo, $termsOfPayment, $discount, $freightCost, $currency)
    {
      $this->invoiceNo = $invoiceNo;
      $this->invoiceDate = $invoiceDate;
      $this->orderNo = $orderNo;
      $this->termsOfPayment = $termsOfPayment;
      $this->discount = $discount;
      $this->freightCost = $freightCost;
      $this->currency = $currency;
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
     * @return \UnifaunWsdl\GoodsInvoice
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
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setInvoiceDate($invoiceDate)
    {
      $this->invoiceDate = $invoiceDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNo()
    {
      return $this->orderNo;
    }

    /**
     * @param string $orderNo
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setOrderNo($orderNo)
    {
      $this->orderNo = $orderNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfPayment()
    {
      return $this->termsOfPayment;
    }

    /**
     * @param string $termsOfPayment
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setTermsOfPayment($termsOfPayment)
    {
      $this->termsOfPayment = $termsOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param string $discount
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreightCost()
    {
      return $this->freightCost;
    }

    /**
     * @param float $freightCost
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setFreightCost($freightCost)
    {
      $this->freightCost = $freightCost;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return InvoiceNote[]
     */
    public function getInvoiceNote()
    {
      return $this->InvoiceNote;
    }

    /**
     * @param InvoiceNote[] $InvoiceNote
     * @return \UnifaunWsdl\GoodsInvoice
     */
    public function setInvoiceNote(array $InvoiceNote = null)
    {
      $this->InvoiceNote = $InvoiceNote;
      return $this;
    }

}
