<?php

namespace UnifaunWsdl;

class Consignment
{

    /**
     * @var Part[] $Part
     */
    protected $Part = null;

    /**
     * @var GoodsItem[] $GoodsItem
     */
    protected $GoodsItem = null;

    /**
     * @var TransportProduct $TransportProduct
     */
    protected $TransportProduct = null;

    /**
     * @var Target $Target
     */
    protected $Target = null;

    /**
     * @var Contents $Contents
     */
    protected $Contents = null;

    /**
     * @var GoodsGroup[] $GoodsGroup
     */
    protected $GoodsGroup = null;

    /**
     * @var ConsignmentReference[] $ConsignmentReference
     */
    protected $ConsignmentReference = null;

    /**
     * @var Note[] $Note
     */
    protected $Note = null;

    /**
     * @var GoodsInvoice $GoodsInvoice
     */
    protected $GoodsInvoice = null;

    /**
     * @var string $orderNo
     */
    protected $orderNo = null;

    /**
     * @var string $orderType
     */
    protected $orderType = null;

    /**
     * @var string $automaticBooking
     */
    protected $automaticBooking = null;

    /**
     * @var string $consignmentId
     */
    protected $consignmentId = null;

    /**
     * @var string $consignmentNo
     */
    protected $consignmentNo = null;

    /**
     * @var string $templateName
     */
    protected $templateName = null;

    /**
     * @var string $owner
     */
    protected $owner = null;

    /**
     * @param Part[] $Part
     * @param GoodsItem[] $GoodsItem
     * @param TransportProduct $TransportProduct
     * @param string $orderNo
     * @param string $orderType
     * @param string $automaticBooking
     * @param string $consignmentId
     * @param string $consignmentNo
     * @param string $templateName
     * @param string $owner
     */
    public function __construct(array $Part, array $GoodsItem, $TransportProduct, $orderNo, $orderType, $automaticBooking, $consignmentId, $consignmentNo, $templateName, $owner)
    {
      $this->Part = $Part;
      $this->GoodsItem = $GoodsItem;
      $this->TransportProduct = $TransportProduct;
      $this->orderNo = $orderNo;
      $this->orderType = $orderType;
      $this->automaticBooking = $automaticBooking;
      $this->consignmentId = $consignmentId;
      $this->consignmentNo = $consignmentNo;
      $this->templateName = $templateName;
      $this->owner = $owner;
    }

    /**
     * @return Part[]
     */
    public function getPart()
    {
      return $this->Part;
    }

    /**
     * @param Part[] $Part
     * @return \UnifaunWsdl\Consignment
     */
    public function setPart(array $Part)
    {
      $this->Part = $Part;
      return $this;
    }

    /**
     * @return GoodsItem[]
     */
    public function getGoodsItem()
    {
      return $this->GoodsItem;
    }

    /**
     * @param GoodsItem[] $GoodsItem
     * @return \UnifaunWsdl\Consignment
     */
    public function setGoodsItem(array $GoodsItem)
    {
      $this->GoodsItem = $GoodsItem;
      return $this;
    }

    /**
     * @return TransportProduct
     */
    public function getTransportProduct()
    {
      return $this->TransportProduct;
    }

    /**
     * @param TransportProduct $TransportProduct
     * @return \UnifaunWsdl\Consignment
     */
    public function setTransportProduct($TransportProduct)
    {
      $this->TransportProduct = $TransportProduct;
      return $this;
    }

    /**
     * @return Target
     */
    public function getTarget()
    {
      return $this->Target;
    }

    /**
     * @param Target $Target
     * @return \UnifaunWsdl\Consignment
     */
    public function setTarget($Target)
    {
      $this->Target = $Target;
      return $this;
    }

    /**
     * @return Contents
     */
    public function getContents()
    {
      return $this->Contents;
    }

    /**
     * @param Contents $Contents
     * @return \UnifaunWsdl\Consignment
     */
    public function setContents($Contents)
    {
      $this->Contents = $Contents;
      return $this;
    }

    /**
     * @return GoodsGroup[]
     */
    public function getGoodsGroup()
    {
      return $this->GoodsGroup;
    }

    /**
     * @param GoodsGroup[] $GoodsGroup
     * @return \UnifaunWsdl\Consignment
     */
    public function setGoodsGroup(array $GoodsGroup = null)
    {
      $this->GoodsGroup = $GoodsGroup;
      return $this;
    }

    /**
     * @return ConsignmentReference[]
     */
    public function getConsignmentReference()
    {
      return $this->ConsignmentReference;
    }

    /**
     * @param ConsignmentReference[] $ConsignmentReference
     * @return \UnifaunWsdl\Consignment
     */
    public function setConsignmentReference(array $ConsignmentReference = null)
    {
      $this->ConsignmentReference = $ConsignmentReference;
      return $this;
    }

    /**
     * @return Note[]
     */
    public function getNote()
    {
      return $this->Note;
    }

    /**
     * @param Note[] $Note
     * @return \UnifaunWsdl\Consignment
     */
    public function setNote(array $Note = null)
    {
      $this->Note = $Note;
      return $this;
    }

    /**
     * @return GoodsInvoice
     */
    public function getGoodsInvoice()
    {
      return $this->GoodsInvoice;
    }

    /**
     * @param GoodsInvoice $GoodsInvoice
     * @return \UnifaunWsdl\Consignment
     */
    public function setGoodsInvoice($GoodsInvoice)
    {
      $this->GoodsInvoice = $GoodsInvoice;
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
     * @return \UnifaunWsdl\Consignment
     */
    public function setOrderNo($orderNo)
    {
      $this->orderNo = $orderNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderType()
    {
      return $this->orderType;
    }

    /**
     * @param string $orderType
     * @return \UnifaunWsdl\Consignment
     */
    public function setOrderType($orderType)
    {
      $this->orderType = $orderType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutomaticBooking()
    {
      return $this->automaticBooking;
    }

    /**
     * @param string $automaticBooking
     * @return \UnifaunWsdl\Consignment
     */
    public function setAutomaticBooking($automaticBooking)
    {
      $this->automaticBooking = $automaticBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsignmentId()
    {
      return $this->consignmentId;
    }

    /**
     * @param string $consignmentId
     * @return \UnifaunWsdl\Consignment
     */
    public function setConsignmentId($consignmentId)
    {
      $this->consignmentId = $consignmentId;
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
     * @return \UnifaunWsdl\Consignment
     */
    public function setConsignmentNo($consignmentNo)
    {
      $this->consignmentNo = $consignmentNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName()
    {
      return $this->templateName;
    }

    /**
     * @param string $templateName
     * @return \UnifaunWsdl\Consignment
     */
    public function setTemplateName($templateName)
    {
      $this->templateName = $templateName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param string $owner
     * @return \UnifaunWsdl\Consignment
     */
    public function setOwner($owner)
    {
      $this->owner = $owner;
      return $this;
    }

}
