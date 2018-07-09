<?php

namespace UnifaunWsdl;

class Target
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
     * @param \DateTime $date
     * @param \DateTime $earliest
     * @param \DateTime $latest
     */
    public function __construct(\DateTime $date, \DateTime $earliest, \DateTime $latest)
    {
      $this->date = $date->format(\DateTime::ATOM);
      $this->earliest = $earliest->format(\DateTime::ATOM);
      $this->latest = $latest->format(\DateTime::ATOM);
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
     * @return \UnifaunWsdl\Target
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
     * @return \UnifaunWsdl\Target
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
     * @return \UnifaunWsdl\Target
     */
    public function setLatest(\DateTime $latest)
    {
      $this->latest = $latest->format(\DateTime::ATOM);
      return $this;
    }

}
