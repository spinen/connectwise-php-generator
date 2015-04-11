<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TimeEntryFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $MemberName
     */
    protected $MemberName = null;

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var float $HoursActual
     */
    protected $HoursActual = null;

    /**
     * @var float $HoursInvoiced
     */
    protected $HoursInvoiced = null;

    /**
     * @var float $HourlyRate
     */
    protected $HourlyRate = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $InternalNotes
     */
    protected $InternalNotes = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $WorkRole
     */
    protected $WorkRole = null;

    /**
     * @var string $WorkType
     */
    protected $WorkType = null;

    /**
     * @var string $BillableOption
     */
    protected $BillableOption = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

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
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @param int $Id
     * @param string $MemberName
     * @param string $MemberIdentifier
     * @param string $Notes
     * @param string $InternalNotes
     * @param string $WorkRole
     * @param string $WorkType
     * @param string $BillableOption
     * @param string $InvoiceNumber
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $MemberName = null, $MemberIdentifier = null, $Notes = null, $InternalNotes = null, $WorkRole = null, $WorkType = null, $BillableOption = null, $InvoiceNumber = null, $UpdatedBy = null)
    {
        $this->Id               = $Id;
        $this->MemberName       = $MemberName;
        $this->MemberIdentifier = $MemberIdentifier;
        $this->Notes            = $Notes;
        $this->InternalNotes    = $InternalNotes;
        $this->WorkRole         = $WorkRole;
        $this->WorkType         = $WorkType;
        $this->BillableOption   = $BillableOption;
        $this->InvoiceNumber    = $InvoiceNumber;
        $this->UpdatedBy        = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberName()
    {
        return $this->MemberName;
    }

    /**
     * @param string $MemberName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setMemberName($MemberName)
    {
        $this->MemberName = $MemberName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
        return $this;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setEndTime(\DateTime $EndTime)
    {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursActual()
    {
        return $this->HoursActual;
    }

    /**
     * @param float $HoursActual
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setHoursActual($HoursActual)
    {
        $this->HoursActual = $HoursActual;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursInvoiced()
    {
        return $this->HoursInvoiced;
    }

    /**
     * @param float $HoursInvoiced
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setHoursInvoiced($HoursInvoiced)
    {
        $this->HoursInvoiced = $HoursInvoiced;
        return $this;
    }

    /**
     * @return float
     */
    public function getHourlyRate()
    {
        return $this->HourlyRate;
    }

    /**
     * @param float $HourlyRate
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setHourlyRate($HourlyRate)
    {
        $this->HourlyRate = $HourlyRate;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setWorkRole($WorkRole)
    {
        $this->WorkRole = $WorkRole;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setWorkType($WorkType)
    {
        $this->WorkType = $WorkType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillableOption()
    {
        return $this->BillableOption;
    }

    /**
     * @param string $BillableOption
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setBillableOption($BillableOption)
    {
        $this->BillableOption = $BillableOption;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeEntryFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
