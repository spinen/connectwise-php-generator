<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TimeEntry
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var \DateTime $DateStart
     */
    protected $DateStart = null;

    /**
     * @var \DateTime $TimeStart
     */
    protected $TimeStart = null;

    /**
     * @var \DateTime $TimeEnd
     */
    protected $TimeEnd = null;

    /**
     * @var float $ActualHours
     */
    protected $ActualHours = null;

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

    /**
     * @var string $WorkType
     */
    protected $WorkType = null;

    /**
     * @var string $WorkRole
     */
    protected $WorkRole = null;

    /**
     * @var string $InternalNotes
     */
    protected $InternalNotes = null;

    /**
     * @var string $ResponseMessage
     */
    protected $ResponseMessage = null;

    /**
     * @var string $LastUpdatedUTC
     */
    protected $LastUpdatedUTC = null;

    /**
     * @var string $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var float $HoursBilled
     */
    protected $HoursBilled = null;

    /**
     * @var float $HoursDeduct
     */
    protected $HoursDeduct = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $ActivityId
     */
    protected $ActivityId = null;

    /**
     * @var string $ChargeCode
     */
    protected $ChargeCode = null;

    /**
     * @var boolean $Overnight
     */
    protected $Overnight = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var boolean $AddNotesToDetailDescription
     */
    protected $AddNotesToDetailDescription = null;

    /**
     * @var boolean $AddNotesToInternalAnalysis
     */
    protected $AddNotesToInternalAnalysis = null;

    /**
     * @var boolean $AddNotesToResolution
     */
    protected $AddNotesToResolution = null;

    /**
     * @param int $Id
     * @param \DateTime $DateStart
     * @param float $HoursBilled
     * @param float $HoursDeduct
     * @param int $TicketId
     */
    public function __construct($Id = null, \DateTime $DateStart = null, $HoursBilled = null, $HoursDeduct = null, $TicketId = null)
    {
        $this->Id          = $Id;
        $this->DateStart   = $DateStart ? $DateStart->format(\DateTime::ATOM) : null;
        $this->HoursBilled = $HoursBilled;
        $this->HoursDeduct = $HoursDeduct;
        $this->TicketId    = $TicketId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setDateStart(\DateTime $DateStart)
    {
        $this->DateStart = $DateStart->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStart()
    {
        if ($this->TimeStart == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TimeStart);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TimeStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setTimeStart(\DateTime $TimeStart = null)
    {
        if ($TimeStart == null) {
            $this->TimeStart = null;
        } else {
            $this->TimeStart = $TimeStart->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeEnd()
    {
        if ($this->TimeEnd == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->TimeEnd);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $TimeEnd
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setTimeEnd(\DateTime $TimeEnd = null)
    {
        if ($TimeEnd == null) {
            $this->TimeEnd = null;
        } else {
            $this->TimeEnd = $TimeEnd->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setActualHours($ActualHours)
    {
        $this->ActualHours = $ActualHours;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkType()
    {
        return $this->WorkType;
    }

    /**
     * @param string $WorkType
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setWorkType($WorkType)
    {
        $this->WorkType = $WorkType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkRole()
    {
        return $this->WorkRole;
    }

    /**
     * @param string $WorkRole
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setWorkRole($WorkRole)
    {
        $this->WorkRole = $WorkRole;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->InternalNotes;
    }

    /**
     * @param string $InternalNotes
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }

    /**
     * @param string $ResponseMessage
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setResponseMessage($ResponseMessage)
    {
        $this->ResponseMessage = $ResponseMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdatedUTC()
    {
        return $this->LastUpdatedUTC;
    }

    /**
     * @param string $LastUpdatedUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setLastUpdatedUTC($LastUpdatedUTC)
    {
        $this->LastUpdatedUTC = $LastUpdatedUTC;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }

    /**
     * @param string $LastUpdated
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setLastUpdated($LastUpdated)
    {
        $this->LastUpdated = $LastUpdated;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursBilled()
    {
        return $this->HoursBilled;
    }

    /**
     * @param float $HoursBilled
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setHoursBilled($HoursBilled)
    {
        $this->HoursBilled = $HoursBilled;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursDeduct()
    {
        return $this->HoursDeduct;
    }

    /**
     * @param float $HoursDeduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setHoursDeduct($HoursDeduct)
    {
        $this->HoursDeduct = $HoursDeduct;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param int $ActivityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setActivityId($ActivityId)
    {
        $this->ActivityId = $ActivityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeCode()
    {
        return $this->ChargeCode;
    }

    /**
     * @param string $ChargeCode
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setChargeCode($ChargeCode)
    {
        $this->ChargeCode = $ChargeCode;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOvernight()
    {
        return $this->Overnight;
    }

    /**
     * @param boolean $Overnight
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setOvernight($Overnight)
    {
        $this->Overnight = $Overnight;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddNotesToDetailDescription()
    {
        return $this->AddNotesToDetailDescription;
    }

    /**
     * @param boolean $AddNotesToDetailDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setAddNotesToDetailDescription($AddNotesToDetailDescription)
    {
        $this->AddNotesToDetailDescription = $AddNotesToDetailDescription;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddNotesToInternalAnalysis()
    {
        return $this->AddNotesToInternalAnalysis;
    }

    /**
     * @param boolean $AddNotesToInternalAnalysis
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setAddNotesToInternalAnalysis($AddNotesToInternalAnalysis)
    {
        $this->AddNotesToInternalAnalysis = $AddNotesToInternalAnalysis;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddNotesToResolution()
    {
        return $this->AddNotesToResolution;
    }

    /**
     * @param boolean $AddNotesToResolution
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntry
     */
    public function setAddNotesToResolution($AddNotesToResolution)
    {
        $this->AddNotesToResolution = $AddNotesToResolution;
        return $this;
    }

}
