<?php

namespace UnifaunWsdl;

class GoodsGroupItem
{

    /**
     * @var ContentItem[] $ContentItem
     */
    protected $ContentItem = null;

    /**
     * @var GoodsItem[] $GoodsItem
     */
    protected $GoodsItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentItem[]
     */
    public function getContentItem()
    {
      return $this->ContentItem;
    }

    /**
     * @param ContentItem[] $ContentItem
     * @return \UnifaunWsdl\GoodsGroupItem
     */
    public function setContentItem(array $ContentItem = null)
    {
      $this->ContentItem = $ContentItem;
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
     * @return \UnifaunWsdl\GoodsGroupItem
     */
    public function setGoodsItem(array $GoodsItem = null)
    {
      $this->GoodsItem = $GoodsItem;
      return $this;
    }

}
