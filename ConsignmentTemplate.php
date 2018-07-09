<?php

namespace UnifaunWsdl;

class ConsignmentTemplate
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param string $name
     * @param string $description
     */
    public function __construct($name, $description)
    {
      $this->name = $name;
      $this->description = $description;
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
     * @return \UnifaunWsdl\ConsignmentTemplate
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \UnifaunWsdl\ConsignmentTemplate
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
