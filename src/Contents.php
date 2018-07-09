<?php

namespace UnifaunWsdl;

class Contents
{

    /**
     * @var ContentItem[] $ContentItem
     */
    protected $ContentItem = null;

    /**
     * @param ContentItem[] $ContentItem
     */
    public function __construct(array $ContentItem)
    {
      $this->ContentItem = $ContentItem;
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
     * @return \UnifaunWsdl\Contents
     */
    public function setContentItem(array $ContentItem)
    {
      $this->ContentItem = $ContentItem;
      return $this;
    }

}
