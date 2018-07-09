<?php

namespace UnifaunWsdl;

class Address
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $address
     */
    protected $address = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $countrycode
     */
    protected $countrycode = null;

    /**
     * @var float $posX
     */
    protected $posX = null;

    /**
     * @var float $posY
     */
    protected $posY = null;

    /**
     * @var string $posSystem
     */
    protected $posSystem = null;

    /**
     * @param string $id
     * @param string $name
     * @param string $address
     * @param string $postcode
     * @param string $city
     * @param string $state
     * @param string $countrycode
     * @param float $posX
     * @param float $posY
     * @param string $posSystem
     */
    public function __construct($id, $name, $address, $postcode, $city, $state, $countrycode, $posX, $posY, $posSystem)
    {
      $this->id = $id;
      $this->name = $name;
      $this->address = $address;
      $this->postcode = $postcode;
      $this->city = $city;
      $this->state = $state;
      $this->countrycode = $countrycode;
      $this->posX = $posX;
      $this->posY = $posY;
      $this->posSystem = $posSystem;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \UnifaunWsdl\Address
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \UnifaunWsdl\Address
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param string $address
     * @return \UnifaunWsdl\Address
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return \UnifaunWsdl\Address
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \UnifaunWsdl\Address
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \UnifaunWsdl\Address
     */
    public function setState($state)
    {
      $this->state = $state;
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
     * @return \UnifaunWsdl\Address
     */
    public function setCountrycode($countrycode)
    {
      $this->countrycode = $countrycode;
      return $this;
    }

    /**
     * @return float
     */
    public function getPosX()
    {
      return $this->posX;
    }

    /**
     * @param float $posX
     * @return \UnifaunWsdl\Address
     */
    public function setPosX($posX)
    {
      $this->posX = $posX;
      return $this;
    }

    /**
     * @return float
     */
    public function getPosY()
    {
      return $this->posY;
    }

    /**
     * @param float $posY
     * @return \UnifaunWsdl\Address
     */
    public function setPosY($posY)
    {
      $this->posY = $posY;
      return $this;
    }

    /**
     * @return string
     */
    public function getPosSystem()
    {
      return $this->posSystem;
    }

    /**
     * @param string $posSystem
     * @return \UnifaunWsdl\Address
     */
    public function setPosSystem($posSystem)
    {
      $this->posSystem = $posSystem;
      return $this;
    }

}
