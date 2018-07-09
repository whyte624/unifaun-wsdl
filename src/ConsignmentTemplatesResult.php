<?php

namespace UnifaunWsdl;

class ConsignmentTemplatesResult
{

    /**
     * @var ConsignmentTemplate[] $consignmentTemplate
     */
    protected $consignmentTemplate = null;

    /**
     * @var Error[] $errors
     */
    protected $errors = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConsignmentTemplate[]
     */
    public function getConsignmentTemplate()
    {
      return $this->consignmentTemplate;
    }

    /**
     * @param ConsignmentTemplate[] $consignmentTemplate
     * @return \UnifaunWsdl\ConsignmentTemplatesResult
     */
    public function setConsignmentTemplate(array $consignmentTemplate = null)
    {
      $this->consignmentTemplate = $consignmentTemplate;
      return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors()
    {
      return $this->errors;
    }

    /**
     * @param Error[] $errors
     * @return \UnifaunWsdl\ConsignmentTemplatesResult
     */
    public function setErrors(array $errors = null)
    {
      $this->errors = $errors;
      return $this;
    }

}
