<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectTicketSummaryInfo
{

    /**
     * @var \DateTime $ActualStart
     */
    protected $ActualStart = null;

    /**
     * @var \DateTime $ActualEnd
     */
    protected $ActualEnd = null;

    /**
     * @var float $ScheduledHours
     */
    protected $ScheduledHours = null;

    /**
     * @var float $ActualHours
     */
    protected $ActualHours = null;

    /**
     * @var \DateTime $ScheduledStart
     */
    protected $ScheduledStart = null;

    /**
     * @var \DateTime $ScheduledEnd
     */
    protected $ScheduledEnd = null;

    /**
     * @param \DateTime $ActualStart
     * @param \DateTime $ActualEnd
     * @param float $ScheduledHours
     * @param float $ActualHours
     * @param \DateTime $ScheduledStart
     * @param \DateTime $ScheduledEnd
     */
    public function __construct(\DateTime $ActualStart = null, \DateTime $ActualEnd = null, $ScheduledHours = null, $ActualHours = null, \DateTime $ScheduledStart = null, \DateTime $ScheduledEnd = null)
    {
        $this->ActualStart    = $ActualStart ? $ActualStart->format(\DateTime::ATOM) : null;
        $this->ActualEnd      = $ActualEnd ? $ActualEnd->format(\DateTime::ATOM) : null;
        $this->ScheduledHours = $ScheduledHours;
        $this->ActualHours    = $ActualHours;
        $this->ScheduledStart = $ScheduledStart ? $ScheduledStart->format(\DateTime::ATOM) : null;
        $this->ScheduledEnd   = $ScheduledEnd ? $ScheduledEnd->format(\DateTime::ATOM) : null;
    }

    /**
     * @return \DateTime
     */
    public function getActualStart()
    {
        if ($this->ActualStart == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ActualStart);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ActualStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketSummaryInfo
     */
    public function setActualStart(\DateTime $ActualStart)
    {
        $this->ActualStart = $ActualStart->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getActualEnd()
    {
        if ($this->ActualEnd == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ActualEnd);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ActualEnd
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketSummaryInfo
     */
    public function setActualEnd(\DateTime $ActualEnd)
    {
        $this->ActualEnd = $ActualEnd->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getScheduledHours()
    {
        return $this->ScheduledHours;
    }

    /**
     * @param float $ScheduledHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketSummaryInfo
     */
    public function setScheduledHours($ScheduledHours)
    {
        $this->ScheduledHours = $ScheduledHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getActualHours()
    {
        return $this->ActualHours;
    }

    /**
     * @param float $ActualHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketSummaryInfo
     */
    public function setActualHours($ActualHours)
    {
        $this->ActualHours = $ActualHours;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledStart()
    {
        if ($this->ScheduledStart == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ScheduledStart);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ScheduledStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketSummaryInfo
     */
    public function setScheduledStart(\DateTime $ScheduledStart)
    {
        $this->ScheduledStart = $ScheduledStart->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getScheduledEnd()
    {
        if ($this->ScheduledEnd == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ScheduledEnd);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ScheduledEnd
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketSummaryInfo
     */
    public function setScheduledEnd(\DateTime $ScheduledEnd)
    {
        $this->ScheduledEnd = $ScheduledEnd->format(\DateTime::ATOM);
        return $this;
    }

}
