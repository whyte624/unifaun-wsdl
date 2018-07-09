<?php

namespace UnifaunWsdl;

class Receipt
{

    /**
     * @var string $URL
     */
    protected $URL = null;

    /**
     * @var string $HTML
     */
    protected $HTML = null;

    /**
     * @var Document $PDF
     */
    protected $PDF = null;

    /**
     * @var Document[] $resources
     */
    protected $resources = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param string $URL
     * @return \UnifaunWsdl\Receipt
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

    /**
     * @return string
     */
    public function getHTML()
    {
      return $this->HTML;
    }

    /**
     * @param string $HTML
     * @return \UnifaunWsdl\Receipt
     */
    public function setHTML($HTML)
    {
      $this->HTML = $HTML;
      return $this;
    }

    /**
     * @return Document
     */
    public function getPDF()
    {
      return $this->PDF;
    }

    /**
     * @param Document $PDF
     * @return \UnifaunWsdl\Receipt
     */
    public function setPDF($PDF)
    {
      $this->PDF = $PDF;
      return $this;
    }

    /**
     * @return Document[]
     */
    public function getResources()
    {
      return $this->resources;
    }

    /**
     * @param Document[] $resources
     * @return \UnifaunWsdl\Receipt
     */
    public function setResources(array $resources = null)
    {
      $this->resources = $resources;
      return $this;
    }

}
