<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ActivityDuration
{

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @param \DateTime $StartTime
     * @param \DateTime $EndTime
     */
    public function __construct(\DateTime $StartTime = null, \DateTime $EndTime = null)
    {
        $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
        $this->EndTime   = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        if ($this->StartTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityDuration
     */
    public function setStartTime(\DateTime $StartTime)
    {
        $this->StartTime = $StartTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
        if ($this->EndTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityDuration
     */
    public function setEndTime(\DateTime $EndTime)
    {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
        return $this;
    }

}
