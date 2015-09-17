<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TicketScheduleEntry
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var int $MemberId
     */
    protected $MemberId = null;

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

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
     * @var int $ScheduleTypeId
     */
    protected $ScheduleTypeId = null;

    /**
     * @var int $SpanId
     */
    protected $SpanId = null;

    /**
     * @var boolean $Done
     */
    protected $Done = null;

    /**
     * @var boolean $Acknowledged
     */
    protected $Acknowledged = null;

    /**
     * @var boolean $AllowScheduleConflicts
     */
    protected $AllowScheduleConflicts = null;

    /**
     * @var boolean $AddMemberToProject
     */
    protected $AddMemberToProject = null;

    /**
     * @var int $ProjectRoleId
     */
    protected $ProjectRoleId = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var \DateTime $ClosedDate
     */
    protected $ClosedDate = null;

    /**
     * @param int $Id
     */
    public function __construct($Id = null)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->TicketId;
    }

    /**
     * @param int $TicketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setMemberId($MemberId)
    {
        $this->MemberId = $MemberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberIdentifier()
    {
        return $this->MemberIdentifier;
    }

    /**
     * @param string $MemberIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setDateStart(\DateTime $DateStart = null)
    {
        if ($DateStart == null) {
            $this->DateStart = null;
        } else {
            $this->DateStart = $DateStart->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setDateEnd(\DateTime $DateEnd = null)
    {
        if ($DateEnd == null) {
            $this->DateEnd = null;
        } else {
            $this->DateEnd = $DateEnd->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setScheduleStatusId($ScheduleStatusId)
    {
        $this->ScheduleStatusId = $ScheduleStatusId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setScheduleTypeId($ScheduleTypeId)
    {
        $this->ScheduleTypeId = $ScheduleTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setSpanId($SpanId)
    {
        $this->SpanId = $SpanId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setAcknowledged($Acknowledged)
    {
        $this->Acknowledged = $Acknowledged;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowScheduleConflicts()
    {
        return $this->AllowScheduleConflicts;
    }

    /**
     * @param boolean $AllowScheduleConflicts
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setAllowScheduleConflicts($AllowScheduleConflicts)
    {
        $this->AllowScheduleConflicts = $AllowScheduleConflicts;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddMemberToProject()
    {
        return $this->AddMemberToProject;
    }

    /**
     * @param boolean $AddMemberToProject
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setAddMemberToProject($AddMemberToProject)
    {
        $this->AddMemberToProject = $AddMemberToProject;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectRoleId()
    {
        return $this->ProjectRoleId;
    }

    /**
     * @param int $ProjectRoleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setProjectRoleId($ProjectRoleId)
    {
        $this->ProjectRoleId = $ProjectRoleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setLastUpdated(\DateTime $LastUpdated = null)
    {
        if ($LastUpdated == null) {
            $this->LastUpdated = null;
        } else {
            $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketScheduleEntry
     */
    public function setClosedDate(\DateTime $ClosedDate = null)
    {
        if ($ClosedDate == null) {
            $this->ClosedDate = null;
        } else {
            $this->ClosedDate = $ClosedDate->format(\DateTime::ATOM);
        }
        return $this;
    }

}
