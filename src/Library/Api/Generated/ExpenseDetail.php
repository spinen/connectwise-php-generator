<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ExpenseDetail
{

    /**
     * @var boolean $Billable
     */
    protected $Billable = null;

    /**
     * @var boolean $Reimbursable
     */
    protected $Reimbursable = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $ActualAmount
     */
    protected $ActualAmount = null;

    /**
     * @var float $AgreementAmount
     */
    protected $AgreementAmount = null;

    /**
     * @var float $InvoicedAmount
     */
    protected $InvoicedAmount = null;

    /**
     * @var float $OdometerStart
     */
    protected $OdometerStart = null;

    /**
     * @var float $OdometerEnd
     */
    protected $OdometerEnd = null;

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
     * @var string $ExpenseClass
     */
    protected $ExpenseClass = null;

    /**
     * @var string $ExpenseType
     */
    protected $ExpenseType = null;

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
     * @var string $PaymentMethod
     */
    protected $PaymentMethod = null;

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
     * @param boolean $Reimbursable
     * @param \DateTime $Date
     * @param string $AgreementName
     * @param string $AgreementType
     * @param string $BusinessUnit
     * @param string $ChargeTo
     * @param string $ExpenseClass
     * @param string $ExpenseType
     * @param string $Location
     * @param string $MemberIdentifier
     * @param string $MemberName
     * @param string $Notes
     * @param string $PaymentMethod
     * @param string $ProjectName
     * @param string $PhaseName
     * @param string $TicketSummary
     */
    public function __construct($Billable = null, $Reimbursable = null, \DateTime $Date = null, $AgreementName = null, $AgreementType = null, $BusinessUnit = null, $ChargeTo = null, $ExpenseClass = null, $ExpenseType = null, $Location = null, $MemberIdentifier = null, $MemberName = null, $Notes = null, $PaymentMethod = null, $ProjectName = null, $PhaseName = null, $TicketSummary = null)
    {
        $this->Billable         = $Billable;
        $this->Reimbursable     = $Reimbursable;
        $this->Date             = $Date ? $Date->format(\DateTime::ATOM) : null;
        $this->AgreementName    = $AgreementName;
        $this->AgreementType    = $AgreementType;
        $this->BusinessUnit     = $BusinessUnit;
        $this->ChargeTo         = $ChargeTo;
        $this->ExpenseClass     = $ExpenseClass;
        $this->ExpenseType      = $ExpenseType;
        $this->Location         = $Location;
        $this->MemberIdentifier = $MemberIdentifier;
        $this->MemberName       = $MemberName;
        $this->Notes            = $Notes;
        $this->PaymentMethod    = $PaymentMethod;
        $this->ProjectName      = $ProjectName;
        $this->PhaseName        = $PhaseName;
        $this->TicketSummary    = $TicketSummary;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setBillable($Billable)
    {
        $this->Billable = $Billable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getReimbursable()
    {
        return $this->Reimbursable;
    }

    /**
     * @param boolean $Reimbursable
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setReimbursable($Reimbursable)
    {
        $this->Reimbursable = $Reimbursable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getActualAmount()
    {
        return $this->ActualAmount;
    }

    /**
     * @param float $ActualAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setActualAmount($ActualAmount)
    {
        $this->ActualAmount = $ActualAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setAgreementAmount($AgreementAmount)
    {
        $this->AgreementAmount = $AgreementAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setInvoicedAmount($InvoicedAmount)
    {
        $this->InvoicedAmount = $InvoicedAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOdometerStart()
    {
        return $this->OdometerStart;
    }

    /**
     * @param float $OdometerStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setOdometerStart($OdometerStart)
    {
        $this->OdometerStart = $OdometerStart;
        return $this;
    }

    /**
     * @return float
     */
    public function getOdometerEnd()
    {
        return $this->OdometerEnd;
    }

    /**
     * @param float $OdometerEnd
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setOdometerEnd($OdometerEnd)
    {
        $this->OdometerEnd = $OdometerEnd;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setChargeTo($ChargeTo)
    {
        $this->ChargeTo = $ChargeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpenseClass()
    {
        return $this->ExpenseClass;
    }

    /**
     * @param string $ExpenseClass
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setExpenseClass($ExpenseClass)
    {
        $this->ExpenseClass = $ExpenseClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpenseType()
    {
        return $this->ExpenseType;
    }

    /**
     * @param string $ExpenseType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setExpenseType($ExpenseType)
    {
        $this->ExpenseType = $ExpenseType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ExpenseDetail
     */
    public function setTicketSummary($TicketSummary)
    {
        $this->TicketSummary = $TicketSummary;
        return $this;
    }

}
