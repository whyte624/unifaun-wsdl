<?php

namespace UnifaunWsdl;

class Tod
{

    /**
     * @var string $combiterm
     */
    protected $combiterm = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var string $countrycode
     */
    protected $countrycode = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @param string $combiterm
     * @param string $location
     * @param string $countrycode
     * @param string $notes
     */
    public function __construct($combiterm, $location, $countrycode, $notes)
    {
      $this->combiterm = $combiterm;
      $this->location = $location;
      $this->countrycode = $countrycode;
      $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getCombiterm()
    {
      return $this->combiterm;
    }

    /**
     * @param string $combiterm
     * @return \UnifaunWsdl\Tod
     */
    public function setCombiterm($combiterm)
    {
      $this->combiterm = $combiterm;
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
     * @return \UnifaunWsdl\Tod
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountrycode()
    {
      return $this->countrycode;
    }

    /**
     * @param string $countrycode
     * @return \UnifaunWsdl\Tod
     */
    public function setCountrycode($countrycode)
    {
      $this->countrycode = $countrycode;
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
     * @return \UnifaunWsdl\Tod
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

}
