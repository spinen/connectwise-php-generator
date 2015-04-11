<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ScheduleEntryFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ObjectId
     */
    protected $ObjectId = null;

    /**
     * @var string $ScheduleType
     */
    protected $ScheduleType = null;

    /**
     * @var int $ScheduleTypeId
     */
    protected $ScheduleTypeId = null;

    /**
     * @var int $MemberId
     */
    protected $MemberId = null;

    /**
     * @var int $ScheduleLocationId
     */
    protected $ScheduleLocationId = null;

    /**
     * @var \DateTime $DateStart
     */
    protected $DateStart = null;

    /**
     * @var \DateTime $DateEnd
     */
    protected $DateEnd = null;

    /**
     * @var int $ReminderTimeId
     */
    protected $ReminderTimeId = null;

    /**
     * @var int $ScheduleStatusId
     */
    protected $ScheduleStatusId = null;

    /**
     * @var int $SpanId
     */
    protected $SpanId = null;

    /**
     * @var \DateTime $ClosedDate
     */
    protected $ClosedDate = null;

    /**
     * @var boolean $Done
     */
    protected $Done = null;

    /**
     * @var boolean $Acknowledged
     */
    protected $Acknowledged = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @param int $Id
     * @param string $ScheduleType
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $ScheduleType = null, $UpdatedBy = null)
    {
        $this->Id           = $Id;
        $this->ScheduleType = $ScheduleType;
        $this->UpdatedBy    = $UpdatedBy;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }

    /**
     * @param int $ObjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setObjectId($ObjectId)
    {
        $this->ObjectId = $ObjectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduleType()
    {
        return $this->ScheduleType;
    }

    /**
     * @param string $ScheduleType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setScheduleType($ScheduleType)
    {
        $this->ScheduleType = $ScheduleType;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleTypeId()
    {
        return $this->ScheduleTypeId;
    }

    /**
     * @param int $ScheduleTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setScheduleTypeId($ScheduleTypeId)
    {
        $this->ScheduleTypeId = $ScheduleTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberId()
    {
        return $this->MemberId;
    }

    /**
     * @param int $MemberId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setMemberId($MemberId)
    {
        $this->MemberId = $MemberId;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleLocationId()
    {
        return $this->ScheduleLocationId;
    }

    /**
     * @param int $ScheduleLocationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setScheduleLocationId($ScheduleLocationId)
    {
        $this->ScheduleLocationId = $ScheduleLocationId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateStart()
    {
        if ($this->DateStart == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateStart);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setDateStart(\DateTime $DateStart)
    {
        $this->DateStart = $DateStart->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd()
    {
        if ($this->DateEnd == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateEnd);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateEnd
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setDateEnd(\DateTime $DateEnd)
    {
        $this->DateEnd = $DateEnd->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getReminderTimeId()
    {
        return $this->ReminderTimeId;
    }

    /**
     * @param int $ReminderTimeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setReminderTimeId($ReminderTimeId)
    {
        $this->ReminderTimeId = $ReminderTimeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getScheduleStatusId()
    {
        return $this->ScheduleStatusId;
    }

    /**
     * @param int $ScheduleStatusId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setScheduleStatusId($ScheduleStatusId)
    {
        $this->ScheduleStatusId = $ScheduleStatusId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpanId()
    {
        return $this->SpanId;
    }

    /**
     * @param int $SpanId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setSpanId($SpanId)
    {
        $this->SpanId = $SpanId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedDate()
    {
        if ($this->ClosedDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ClosedDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ClosedDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setClosedDate(\DateTime $ClosedDate)
    {
        $this->ClosedDate = $ClosedDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDone()
    {
        return $this->Done;
    }

    /**
     * @param boolean $Done
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setDone($Done)
    {
        $this->Done = $Done;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAcknowledged()
    {
        return $this->Acknowledged;
    }

    /**
     * @param boolean $Acknowledged
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setAcknowledged($Acknowledged)
    {
        $this->Acknowledged = $Acknowledged;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        if ($this->LastUpdated == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \Spinen\ConnectWise\Library\Api\Generated\ScheduleEntryFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
