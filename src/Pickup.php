<?php

namespace UnifaunWsdl;

class Pickup
{

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var \DateTime $earliest
     */
    protected $earliest = null;

    /**
     * @var \DateTime $latest
     */
    protected $latest = null;

    /**
     * @var string $instruction
     */
    protected $instruction = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @param \DateTime $date
     * @param \DateTime $earliest
     * @param \DateTime $latest
     * @param string $instruction
     * @param string $location
     */
    public function __construct(\DateTime $date, \DateTime $earliest, \DateTime $latest, $instruction, $location)
    {
      $this->date = $date->format(\DateTime::ATOM);
      $this->earliest = $earliest->format(\DateTime::ATOM);
      $this->latest = $latest->format(\DateTime::ATOM);
      $this->instruction = $instruction;
      $this->location = $location;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \UnifaunWsdl\Pickup
     */
    public function setDate(\DateTime $date)
    {
      $this->date = $date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliest()
    {
      if ($this->earliest == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->earliest);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $earliest
     * @return \UnifaunWsdl\Pickup
     */
    public function setEarliest(\DateTime $earliest)
    {
      $this->earliest = $earliest->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLatest()
    {
      if ($this->latest == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->latest);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $latest
     * @return \UnifaunWsdl\Pickup
     */
    public function setLatest(\DateTime $latest)
    {
      $this->latest = $latest->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getInstruction()
    {
      return $this->instruction;
    }

    /**
     * @param string $instruction
     * @return \UnifaunWsdl\Pickup
     */
    public function setInstruction($instruction)
    {
      $this->instruction = $instruction;
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
     * @return \UnifaunWsdl\Pickup
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}
