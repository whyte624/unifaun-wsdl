<?php

namespace UnifaunWsdl;

class ContentItem
{

    /**
     * @var string $noOfOrderedItems
     */
    protected $noOfOrderedItems = null;

    /**
     * @var string $noOfDeliveredItems
     */
    protected $noOfDeliveredItems = null;

    /**
     * @var string $articleNo
     */
    protected $articleNo = null;

    /**
     * @var string $productName
     */
    protected $productName = null;

    /**
     * @var string $productAttribute
     */
    protected $productAttribute = null;

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
     * @var float $price
     */
    protected $price = null;

    /**
     * @var string $packageType
     */
    protected $packageType = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var string $itemId
     */
    protected $itemId = null;

    /**
     * @var string $statisticalNo
     */
    protected $statisticalNo = null;

    /**
     * @param string $noOfOrderedItems
     * @param string $noOfDeliveredItems
     * @param string $articleNo
     * @param string $productName
     * @param string $productAttribute
     * @param float $weight
     * @param float $volume
     * @param float $length
     * @param float $width
     * @param float $height
     * @param float $price
     * @param string $packageType
     * @param string $location
     * @param string $notes
     * @param string $itemId
     * @param string $statisticalNo
     */
    public function __construct($noOfOrderedItems, $noOfDeliveredItems, $articleNo, $productName, $productAttribute, $weight, $volume, $length, $width, $height, $price, $packageType, $location, $notes, $itemId, $statisticalNo)
    {
      $this->noOfOrderedItems = $noOfOrderedItems;
      $this->noOfDeliveredItems = $noOfDeliveredItems;
      $this->articleNo = $articleNo;
      $this->productName = $productName;
      $this->productAttribute = $productAttribute;
      $this->weight = $weight;
      $this->volume = $volume;
      $this->length = $length;
      $this->width = $width;
      $this->height = $height;
      $this->price = $price;
      $this->packageType = $packageType;
      $this->location = $location;
      $this->notes = $notes;
      $this->itemId = $itemId;
      $this->statisticalNo = $statisticalNo;
    }

    /**
     * @return string
     */
    public function getNoOfOrderedItems()
    {
      return $this->noOfOrderedItems;
    }

    /**
     * @param string $noOfOrderedItems
     * @return \UnifaunWsdl\ContentItem
     */
    public function setNoOfOrderedItems($noOfOrderedItems)
    {
      $this->noOfOrderedItems = $noOfOrderedItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoOfDeliveredItems()
    {
      return $this->noOfDeliveredItems;
    }

    /**
     * @param string $noOfDeliveredItems
     * @return \UnifaunWsdl\ContentItem
     */
    public function setNoOfDeliveredItems($noOfDeliveredItems)
    {
      $this->noOfDeliveredItems = $noOfDeliveredItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNo()
    {
      return $this->articleNo;
    }

    /**
     * @param string $articleNo
     * @return \UnifaunWsdl\ContentItem
     */
    public function setArticleNo($articleNo)
    {
      $this->articleNo = $articleNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->productName;
    }

    /**
     * @param string $productName
     * @return \UnifaunWsdl\ContentItem
     */
    public function setProductName($productName)
    {
      $this->productName = $productName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductAttribute()
    {
      return $this->productAttribute;
    }

    /**
     * @param string $productAttribute
     * @return \UnifaunWsdl\ContentItem
     */
    public function setProductAttribute($productAttribute)
    {
      $this->productAttribute = $productAttribute;
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
     * @return \UnifaunWsdl\ContentItem
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
     * @return \UnifaunWsdl\ContentItem
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
     * @return \UnifaunWsdl\ContentItem
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
     * @return \UnifaunWsdl\ContentItem
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
     * @return \UnifaunWsdl\ContentItem
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \UnifaunWsdl\ContentItem
     */
    public function setPrice($price)
    {
      $this->price = $price;
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
     * @return \UnifaunWsdl\ContentItem
     */
    public function setPackageType($packageType)
    {
      $this->packageType = $packageType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \UnifaunWsdl\ContentItem
     */
    public function setLocation($location)
    {
      $this->location = $location;
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
     * @return \UnifaunWsdl\ContentItem
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param string $itemId
     * @return \UnifaunWsdl\ContentItem
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
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
     * @return \UnifaunWsdl\ContentItem
     */
    public function setStatisticalNo($statisticalNo)
    {
      $this->statisticalNo = $statisticalNo;
      return $this;
    }

}
