<?php

namespace UnifaunWsdl;

class GoodsGroup
{

    /**
     * @var GoodsGroupItem[] $GoodsGroupItem
     */
    protected $GoodsGroupItem = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
    }

    /**
     * @return GoodsGroupItem[]
     */
    public function getGoodsGroupItem()
    {
      return $this->GoodsGroupItem;
    }

    /**
     * @param GoodsGroupItem[] $GoodsGroupItem
     * @return \UnifaunWsdl\GoodsGroup
     */
    public function setGoodsGroupItem(array $GoodsGroupItem = null)
    {
      $this->GoodsGroupItem = $GoodsGroupItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \UnifaunWsdl\GoodsGroup
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
