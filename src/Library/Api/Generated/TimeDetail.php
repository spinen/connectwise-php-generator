<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TimeDetail
{

    /**
     * @var boolean $Billable
     */
    protected $Billable = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var float $ActualHours
     */
    protected $ActualHours = null;

    /**
     * @var float $Adjustment
     */
    protected $Adjustment = null;

    /**
     * @var float $AgreementAdjustment
     */
    protected $AgreementAdjustment = null;

    /**
     * @var float $AgreementAmount
     */
    protected $AgreementAmount = null;

    /**
     * @var float $AgreementHours
     */
    protected $AgreementHours = null;

    /**
     * @var float $HourlyRate
     */
    protected $HourlyRate = null;

    /**
     * @var float $HourlyCost
     */
    protected $HourlyCost = null;

    /**
     * @var float $InvoicedAmount
     */
    protected $InvoicedAmount = null;

    /**
     * @var float $InvoicedHours
     */
    protected $InvoicedHours = null;

    /**
     * @var string $AgreementName
     */
    protected $AgreementName = null;

    /**
     * @var string $AgreementType
     */
    protected $AgreementType = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var string $ChargeTo
     */
    protected $ChargeTo = null;

    /**
     * @var string $InternalNotes
     */
    protected $InternalNotes = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

    /**
     * @var string $MemberName
     */
    protected $MemberName = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $WorkRole
     */
    protected $WorkRole = null;

    /**
     * @var string $WorkType
     */
    protected $WorkType = null;

    /**
     * @var string $ProjectName
     */
    protected $ProjectName = null;

    /**
     * @var int $ProjectNumber
     */
    protected $ProjectNumber = null;

    /**
     * @var string $PhaseName
     */
    protected $PhaseName = null;

    /**
     * @var int $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var string $TicketSummary
     */
    protected $TicketSummary = null;

    /**
     * @param boolean $Billable
     * @param \DateTime $Date
     * @param \DateTime $EndTime
     * @param \DateTime $StartTime
     */
    public function __construct($Billable = null, \DateTime $Date = null, \DateTime $EndTime = null, \DateTime $StartTime = null)
    {
        $this->Billable  = $Billable;
        $this->Date      = $Date ? $Date->format(\DateTime::ATOM) : null;
        $this->EndTime   = $EndTime ? $EndTime->format(\DateTime::ATOM) : null;
        $this->StartTime = $StartTime ? $StartTime->format(\DateTime::ATOM) : null;
    }

    /**
     * @return boolean
     */
    public function getBillable()
    {
        return $this->Billable;
    }

    /**
     * @param boolean $Billable
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setBillable($Billable)
    {
        $this->Billable = $Billable;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setEndTime(\DateTime $EndTime)
    {
        $this->EndTime = $EndTime->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setStartTime(\DateTime $StartTime)
    {
        $this->StartTime = $StartTime->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setActualHours($ActualHours)
    {
        $this->ActualHours = $ActualHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustment()
    {
        return $this->Adjustment;
    }

    /**
     * @param float $Adjustment
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setAdjustment($Adjustment)
    {
        $this->Adjustment = $Adjustment;
        return $this;
    }

    /**
     * @return float
     */
    public function getAgreementAdjustment()
    {
        return $this->AgreementAdjustment;
    }

    /**
     * @param float $AgreementAdjustment
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setAgreementAdjustment($AgreementAdjustment)
    {
        $this->AgreementAdjustment = $AgreementAdjustment;
        return $this;
    }

    /**
     * @return float
     */
    public function getAgreementAmount()
    {
        return $this->AgreementAmount;
    }

    /**
     * @param float $AgreementAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setAgreementAmount($AgreementAmount)
    {
        $this->AgreementAmount = $AgreementAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAgreementHours()
    {
        return $this->AgreementHours;
    }

    /**
     * @param float $AgreementHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setAgreementHours($AgreementHours)
    {
        $this->AgreementHours = $AgreementHours;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setHourlyRate($HourlyRate)
    {
        $this->HourlyRate = $HourlyRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getHourlyCost()
    {
        return $this->HourlyCost;
    }

    /**
     * @param float $HourlyCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setHourlyCost($HourlyCost)
    {
        $this->HourlyCost = $HourlyCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoicedAmount()
    {
        return $this->InvoicedAmount;
    }

    /**
     * @param float $InvoicedAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setInvoicedAmount($InvoicedAmount)
    {
        $this->InvoicedAmount = $InvoicedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoicedHours()
    {
        return $this->InvoicedHours;
    }

    /**
     * @param float $InvoicedHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setInvoicedHours($InvoicedHours)
    {
        $this->InvoicedHours = $InvoicedHours;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreementName()
    {
        return $this->AgreementName;
    }

    /**
     * @param string $AgreementName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setAgreementName($AgreementName)
    {
        $this->AgreementName = $AgreementName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreementType()
    {
        return $this->AgreementType;
    }

    /**
     * @param string $AgreementType
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setAgreementType($AgreementType)
    {
        $this->AgreementType = $AgreementType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessUnit()
    {
        return $this->BusinessUnit;
    }

    /**
     * @param string $BusinessUnit
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeTo()
    {
        return $this->ChargeTo;
    }

    /**
     * @param string $ChargeTo
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setChargeTo($ChargeTo)
    {
        $this->ChargeTo = $ChargeTo;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setMemberName($MemberName)
    {
        $this->MemberName = $MemberName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setWorkType($WorkType)
    {
        $this->WorkType = $WorkType;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * @param string $ProjectName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectNumber()
    {
        return $this->ProjectNumber;
    }

    /**
     * @param int $ProjectNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setProjectNumber($ProjectNumber)
    {
        $this->ProjectNumber = $ProjectNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhaseName()
    {
        return $this->PhaseName;
    }

    /**
     * @param string $PhaseName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setPhaseName($PhaseName)
    {
        $this->PhaseName = $PhaseName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }

    /**
     * @param int $TicketNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setTicketNumber($TicketNumber)
    {
        $this->TicketNumber = $TicketNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTicketSummary()
    {
        return $this->TicketSummary;
    }

    /**
     * @param string $TicketSummary
     * @return \Spinen\ConnectWise\Library\Api\Generated\TimeDetail
     */
    public function setTicketSummary($TicketSummary)
    {
        $this->TicketSummary = $TicketSummary;
        return $this;
    }

}
