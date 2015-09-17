<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Agreement
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $AgreementTypeId
     */
    protected $AgreementTypeId = null;

    /**
     * @var string $AgreementName
     */
    protected $AgreementName = null;

    /**
     * @var int $ParentAgreementId
     */
    protected $ParentAgreementId = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $CustomerPO
     */
    protected $CustomerPO = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $DepartmentId
     */
    protected $DepartmentId = null;

    /**
     * @var boolean $RestrictLocationFlag
     */
    protected $RestrictLocationFlag = null;

    /**
     * @var boolean $RestrictDepartmentFlag
     */
    protected $RestrictDepartmentFlag = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $NoEndingDateFlag
     */
    protected $NoEndingDateFlag = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var boolean $CancelledFlag
     */
    protected $CancelledFlag = null;

    /**
     * @var \DateTime $DateCancelled
     */
    protected $DateCancelled = null;

    /**
     * @var string $ReasonCancelled
     */
    protected $ReasonCancelled = null;

    /**
     * @var int $SlaId
     */
    protected $SlaId = null;

    /**
     * @var int $SubContractCompanyId
     */
    protected $SubContractCompanyId = null;

    /**
     * @var int $SubContractContactId
     */
    protected $SubContractContactId = null;

    /**
     * @var string $WorkOrder
     */
    protected $WorkOrder = null;

    /**
     * @var string $InternalNotes
     */
    protected $InternalNotes = null;

    /**
     * @var ApplicationUnits $ApplicationUnits
     */
    protected $ApplicationUnits = null;

    /**
     * @var float $ApplicationLimit
     */
    protected $ApplicationLimit = null;

    /**
     * @var ApplicationCycle $ApplicationCycle
     */
    protected $ApplicationCycle = null;

    /**
     * @var PeriodType $PeriodType
     */
    protected $PeriodType = null;

    /**
     * @var boolean $ApplicationUnlimitedFlag
     */
    protected $ApplicationUnlimitedFlag = null;

    /**
     * @var boolean $OneTimeFlag
     */
    protected $OneTimeFlag = null;

    /**
     * @var boolean $CoverAgreementTime
     */
    protected $CoverAgreementTime = null;

    /**
     * @var boolean $CoverAgreementProduct
     */
    protected $CoverAgreementProduct = null;

    /**
     * @var boolean $CoverAgreementExpense
     */
    protected $CoverAgreementExpense = null;

    /**
     * @var boolean $CoverSalesTax
     */
    protected $CoverSalesTax = null;

    /**
     * @var boolean $CarryOverUnused
     */
    protected $CarryOverUnused = null;

    /**
     * @var boolean $AllowOverrruns
     */
    protected $AllowOverrruns = null;

    /**
     * @var int $ExpiredDays
     */
    protected $ExpiredDays = null;

    /**
     * @var int $Limit
     */
    protected $Limit = null;

    /**
     * @var boolean $ExpireWhenZero
     */
    protected $ExpireWhenZero = null;

    /**
     * @var boolean $ChargeToFirm
     */
    protected $ChargeToFirm = null;

    /**
     * @var EmployeeCompRate $EmployeeCompRate
     */
    protected $EmployeeCompRate = null;

    /**
     * @var EmployeeCompNotExceed $EmployeeCompNotExceed
     */
    protected $EmployeeCompNotExceed = null;

    /**
     * @var float $CompHourlyRate
     */
    protected $CompHourlyRate = null;

    /**
     * @var float $CompLimitAmount
     */
    protected $CompLimitAmount = null;

    /**
     * @var int $BillCycleId
     */
    protected $BillCycleId = null;

    /**
     * @var boolean $BillOneTimeFlag
     */
    protected $BillOneTimeFlag = null;

    /**
     * @var int $BillTermsId
     */
    protected $BillTermsId = null;

    /**
     * @var InvoicingCycle $InvoicingCycle
     */
    protected $InvoicingCycle = null;

    /**
     * @var int $BillToCompanyId
     */
    protected $BillToCompanyId = null;

    /**
     * @var int $BillToAddressId
     */
    protected $BillToAddressId = null;

    /**
     * @var float $BillAmount
     */
    protected $BillAmount = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var float $ProrateFirstBill
     */
    protected $ProrateFirstBill = null;

    /**
     * @var \DateTime $BillStartDate
     */
    protected $BillStartDate = null;

    /**
     * @var int $TaxCodeId
     */
    protected $TaxCodeId = null;

    /**
     * @var boolean $RestrictDownPayment
     */
    protected $RestrictDownPayment = null;

    /**
     * @var string $InvoiceDescription
     */
    protected $InvoiceDescription = null;

    /**
     * @var boolean $TopComment
     */
    protected $TopComment = null;

    /**
     * @var boolean $BottomComment
     */
    protected $BottomComment = null;

    /**
     * @var int $WorkRoleId
     */
    protected $WorkRoleId = null;

    /**
     * @var int $WorkTypeId
     */
    protected $WorkTypeId = null;

    /**
     * @var int $ProjectTypeId
     */
    protected $ProjectTypeId = null;

    /**
     * @var int $InvoiceTemplateId
     */
    protected $InvoiceTemplateId = null;

    /**
     * @var BillableOptions $BillTime
     */
    protected $BillTime = null;

    /**
     * @var BillableOptions $BillExpenses
     */
    protected $BillExpenses = null;

    /**
     * @var BillableOptions $BillProducts
     */
    protected $BillProducts = null;

    /**
     * @var boolean $BillableTimeInvoice
     */
    protected $BillableTimeInvoice = null;

    /**
     * @var boolean $BillableExpenseInvoice
     */
    protected $BillableExpenseInvoice = null;

    /**
     * @var boolean $BillableProductInvoice
     */
    protected $BillableProductInvoice = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementTypeId()
    {
        return $this->AgreementTypeId;
    }

    /**
     * @param int $AgreementTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setAgreementTypeId($AgreementTypeId)
    {
        $this->AgreementTypeId = $AgreementTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setAgreementName($AgreementName)
    {
        $this->AgreementName = $AgreementName;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentAgreementId()
    {
        return $this->ParentAgreementId;
    }

    /**
     * @param int $ParentAgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setParentAgreementId($ParentAgreementId)
    {
        $this->ParentAgreementId = $ParentAgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param int $ContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerPO()
    {
        return $this->CustomerPO;
    }

    /**
     * @param string $CustomerPO
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCustomerPO($CustomerPO)
    {
        $this->CustomerPO = $CustomerPO;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->DepartmentId;
    }

    /**
     * @param int $DepartmentId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setDepartmentId($DepartmentId)
    {
        $this->DepartmentId = $DepartmentId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictLocationFlag()
    {
        return $this->RestrictLocationFlag;
    }

    /**
     * @param boolean $RestrictLocationFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setRestrictLocationFlag($RestrictLocationFlag)
    {
        $this->RestrictLocationFlag = $RestrictLocationFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictDepartmentFlag()
    {
        return $this->RestrictDepartmentFlag;
    }

    /**
     * @param boolean $RestrictDepartmentFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setRestrictDepartmentFlag($RestrictDepartmentFlag)
    {
        $this->RestrictDepartmentFlag = $RestrictDepartmentFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
        if ($StartDate == null) {
            $this->StartDate = null;
        } else {
            $this->StartDate = $StartDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
        if ($EndDate == null) {
            $this->EndDate = null;
        } else {
            $this->EndDate = $EndDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNoEndingDateFlag()
    {
        return $this->NoEndingDateFlag;
    }

    /**
     * @param boolean $NoEndingDateFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setNoEndingDateFlag($NoEndingDateFlag)
    {
        $this->NoEndingDateFlag = $NoEndingDateFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->OpportunityId;
    }

    /**
     * @param int $OpportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCancelledFlag()
    {
        return $this->CancelledFlag;
    }

    /**
     * @param boolean $CancelledFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCancelledFlag($CancelledFlag)
    {
        $this->CancelledFlag = $CancelledFlag;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCancelled()
    {
        if ($this->DateCancelled == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateCancelled);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateCancelled
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setDateCancelled(\DateTime $DateCancelled = null)
    {
        if ($DateCancelled == null) {
            $this->DateCancelled = null;
        } else {
            $this->DateCancelled = $DateCancelled->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonCancelled()
    {
        return $this->ReasonCancelled;
    }

    /**
     * @param string $ReasonCancelled
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setReasonCancelled($ReasonCancelled)
    {
        $this->ReasonCancelled = $ReasonCancelled;
        return $this;
    }

    /**
     * @return int
     */
    public function getSlaId()
    {
        return $this->SlaId;
    }

    /**
     * @param int $SlaId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setSlaId($SlaId)
    {
        $this->SlaId = $SlaId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubContractCompanyId()
    {
        return $this->SubContractCompanyId;
    }

    /**
     * @param int $SubContractCompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setSubContractCompanyId($SubContractCompanyId)
    {
        $this->SubContractCompanyId = $SubContractCompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubContractContactId()
    {
        return $this->SubContractContactId;
    }

    /**
     * @param int $SubContractContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setSubContractContactId($SubContractContactId)
    {
        $this->SubContractContactId = $SubContractContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkOrder()
    {
        return $this->WorkOrder;
    }

    /**
     * @param string $WorkOrder
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setWorkOrder($WorkOrder)
    {
        $this->WorkOrder = $WorkOrder;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;
        return $this;
    }

    /**
     * @return ApplicationUnits
     */
    public function getApplicationUnits()
    {
        return $this->ApplicationUnits;
    }

    /**
     * @param ApplicationUnits $ApplicationUnits
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setApplicationUnits(ApplicationUnits $ApplicationUnits)
    {
        $this->ApplicationUnits = $ApplicationUnits;
        return $this;
    }

    /**
     * @return float
     */
    public function getApplicationLimit()
    {
        return $this->ApplicationLimit;
    }

    /**
     * @param float $ApplicationLimit
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setApplicationLimit($ApplicationLimit)
    {
        $this->ApplicationLimit = $ApplicationLimit;
        return $this;
    }

    /**
     * @return ApplicationCycle
     */
    public function getApplicationCycle()
    {
        return $this->ApplicationCycle;
    }

    /**
     * @param ApplicationCycle $ApplicationCycle
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setApplicationCycle(ApplicationCycle $ApplicationCycle)
    {
        $this->ApplicationCycle = $ApplicationCycle;
        return $this;
    }

    /**
     * @return PeriodType
     */
    public function getPeriodType()
    {
        return $this->PeriodType;
    }

    /**
     * @param PeriodType $PeriodType
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setPeriodType(PeriodType $PeriodType)
    {
        $this->PeriodType = $PeriodType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getApplicationUnlimitedFlag()
    {
        return $this->ApplicationUnlimitedFlag;
    }

    /**
     * @param boolean $ApplicationUnlimitedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setApplicationUnlimitedFlag($ApplicationUnlimitedFlag)
    {
        $this->ApplicationUnlimitedFlag = $ApplicationUnlimitedFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getOneTimeFlag()
    {
        return $this->OneTimeFlag;
    }

    /**
     * @param boolean $OneTimeFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setOneTimeFlag($OneTimeFlag)
    {
        $this->OneTimeFlag = $OneTimeFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCoverAgreementTime()
    {
        return $this->CoverAgreementTime;
    }

    /**
     * @param boolean $CoverAgreementTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCoverAgreementTime($CoverAgreementTime)
    {
        $this->CoverAgreementTime = $CoverAgreementTime;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCoverAgreementProduct()
    {
        return $this->CoverAgreementProduct;
    }

    /**
     * @param boolean $CoverAgreementProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCoverAgreementProduct($CoverAgreementProduct)
    {
        $this->CoverAgreementProduct = $CoverAgreementProduct;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCoverAgreementExpense()
    {
        return $this->CoverAgreementExpense;
    }

    /**
     * @param boolean $CoverAgreementExpense
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCoverAgreementExpense($CoverAgreementExpense)
    {
        $this->CoverAgreementExpense = $CoverAgreementExpense;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCoverSalesTax()
    {
        return $this->CoverSalesTax;
    }

    /**
     * @param boolean $CoverSalesTax
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCoverSalesTax($CoverSalesTax)
    {
        $this->CoverSalesTax = $CoverSalesTax;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCarryOverUnused()
    {
        return $this->CarryOverUnused;
    }

    /**
     * @param boolean $CarryOverUnused
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCarryOverUnused($CarryOverUnused)
    {
        $this->CarryOverUnused = $CarryOverUnused;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOverrruns()
    {
        return $this->AllowOverrruns;
    }

    /**
     * @param boolean $AllowOverrruns
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setAllowOverrruns($AllowOverrruns)
    {
        $this->AllowOverrruns = $AllowOverrruns;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiredDays()
    {
        return $this->ExpiredDays;
    }

    /**
     * @param int $ExpiredDays
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setExpiredDays($ExpiredDays)
    {
        $this->ExpiredDays = $ExpiredDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * @param int $Limit
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getExpireWhenZero()
    {
        return $this->ExpireWhenZero;
    }

    /**
     * @param boolean $ExpireWhenZero
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setExpireWhenZero($ExpireWhenZero)
    {
        $this->ExpireWhenZero = $ExpireWhenZero;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeToFirm()
    {
        return $this->ChargeToFirm;
    }

    /**
     * @param boolean $ChargeToFirm
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setChargeToFirm($ChargeToFirm)
    {
        $this->ChargeToFirm = $ChargeToFirm;
        return $this;
    }

    /**
     * @return EmployeeCompRate
     */
    public function getEmployeeCompRate()
    {
        return $this->EmployeeCompRate;
    }

    /**
     * @param EmployeeCompRate $EmployeeCompRate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setEmployeeCompRate(EmployeeCompRate $EmployeeCompRate)
    {
        $this->EmployeeCompRate = $EmployeeCompRate;
        return $this;
    }

    /**
     * @return EmployeeCompNotExceed
     */
    public function getEmployeeCompNotExceed()
    {
        return $this->EmployeeCompNotExceed;
    }

    /**
     * @param EmployeeCompNotExceed $EmployeeCompNotExceed
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setEmployeeCompNotExceed(EmployeeCompNotExceed $EmployeeCompNotExceed)
    {
        $this->EmployeeCompNotExceed = $EmployeeCompNotExceed;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompHourlyRate()
    {
        return $this->CompHourlyRate;
    }

    /**
     * @param float $CompHourlyRate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCompHourlyRate($CompHourlyRate)
    {
        $this->CompHourlyRate = $CompHourlyRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCompLimitAmount()
    {
        return $this->CompLimitAmount;
    }

    /**
     * @param float $CompLimitAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setCompLimitAmount($CompLimitAmount)
    {
        $this->CompLimitAmount = $CompLimitAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillCycleId()
    {
        return $this->BillCycleId;
    }

    /**
     * @param int $BillCycleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillCycleId($BillCycleId)
    {
        $this->BillCycleId = $BillCycleId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillOneTimeFlag()
    {
        return $this->BillOneTimeFlag;
    }

    /**
     * @param boolean $BillOneTimeFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillOneTimeFlag($BillOneTimeFlag)
    {
        $this->BillOneTimeFlag = $BillOneTimeFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillTermsId()
    {
        return $this->BillTermsId;
    }

    /**
     * @param int $BillTermsId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillTermsId($BillTermsId)
    {
        $this->BillTermsId = $BillTermsId;
        return $this;
    }

    /**
     * @return InvoicingCycle
     */
    public function getInvoicingCycle()
    {
        return $this->InvoicingCycle;
    }

    /**
     * @param InvoicingCycle $InvoicingCycle
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setInvoicingCycle(InvoicingCycle $InvoicingCycle)
    {
        $this->InvoicingCycle = $InvoicingCycle;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillToCompanyId()
    {
        return $this->BillToCompanyId;
    }

    /**
     * @param int $BillToCompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillToCompanyId($BillToCompanyId)
    {
        $this->BillToCompanyId = $BillToCompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillToAddressId()
    {
        return $this->BillToAddressId;
    }

    /**
     * @param int $BillToAddressId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillToAddressId($BillToAddressId)
    {
        $this->BillToAddressId = $BillToAddressId;
        return $this;
    }

    /**
     * @return float
     */
    public function getBillAmount()
    {
        return $this->BillAmount;
    }

    /**
     * @param float $BillAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillAmount($BillAmount)
    {
        $this->BillAmount = $BillAmount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * @param boolean $Taxable
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * @return float
     */
    public function getProrateFirstBill()
    {
        return $this->ProrateFirstBill;
    }

    /**
     * @param float $ProrateFirstBill
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setProrateFirstBill($ProrateFirstBill)
    {
        $this->ProrateFirstBill = $ProrateFirstBill;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBillStartDate()
    {
        if ($this->BillStartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BillStartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BillStartDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillStartDate(\DateTime $BillStartDate = null)
    {
        if ($BillStartDate == null) {
            $this->BillStartDate = null;
        } else {
            $this->BillStartDate = $BillStartDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxCodeId()
    {
        return $this->TaxCodeId;
    }

    /**
     * @param int $TaxCodeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setTaxCodeId($TaxCodeId)
    {
        $this->TaxCodeId = $TaxCodeId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictDownPayment()
    {
        return $this->RestrictDownPayment;
    }

    /**
     * @param boolean $RestrictDownPayment
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setRestrictDownPayment($RestrictDownPayment)
    {
        $this->RestrictDownPayment = $RestrictDownPayment;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->InvoiceDescription;
    }

    /**
     * @param string $InvoiceDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setInvoiceDescription($InvoiceDescription)
    {
        $this->InvoiceDescription = $InvoiceDescription;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTopComment()
    {
        return $this->TopComment;
    }

    /**
     * @param boolean $TopComment
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setTopComment($TopComment)
    {
        $this->TopComment = $TopComment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBottomComment()
    {
        return $this->BottomComment;
    }

    /**
     * @param boolean $BottomComment
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBottomComment($BottomComment)
    {
        $this->BottomComment = $BottomComment;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkRoleId()
    {
        return $this->WorkRoleId;
    }

    /**
     * @param int $WorkRoleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setWorkRoleId($WorkRoleId)
    {
        $this->WorkRoleId = $WorkRoleId;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->WorkTypeId;
    }

    /**
     * @param int $WorkTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setWorkTypeId($WorkTypeId)
    {
        $this->WorkTypeId = $WorkTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectTypeId()
    {
        return $this->ProjectTypeId;
    }

    /**
     * @param int $ProjectTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setProjectTypeId($ProjectTypeId)
    {
        $this->ProjectTypeId = $ProjectTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceTemplateId()
    {
        return $this->InvoiceTemplateId;
    }

    /**
     * @param int $InvoiceTemplateId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setInvoiceTemplateId($InvoiceTemplateId)
    {
        $this->InvoiceTemplateId = $InvoiceTemplateId;
        return $this;
    }

    /**
     * @return BillableOptions
     */
    public function getBillTime()
    {
        return $this->BillTime;
    }

    /**
     * @param BillableOptions $BillTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillTime(BillableOptions $BillTime)
    {
        $this->BillTime = $BillTime;
        return $this;
    }

    /**
     * @return BillableOptions
     */
    public function getBillExpenses()
    {
        return $this->BillExpenses;
    }

    /**
     * @param BillableOptions $BillExpenses
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillExpenses(BillableOptions $BillExpenses)
    {
        $this->BillExpenses = $BillExpenses;
        return $this;
    }

    /**
     * @return BillableOptions
     */
    public function getBillProducts()
    {
        return $this->BillProducts;
    }

    /**
     * @param BillableOptions $BillProducts
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillProducts(BillableOptions $BillProducts)
    {
        $this->BillProducts = $BillProducts;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillableTimeInvoice()
    {
        return $this->BillableTimeInvoice;
    }

    /**
     * @param boolean $BillableTimeInvoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillableTimeInvoice($BillableTimeInvoice)
    {
        $this->BillableTimeInvoice = $BillableTimeInvoice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillableExpenseInvoice()
    {
        return $this->BillableExpenseInvoice;
    }

    /**
     * @param boolean $BillableExpenseInvoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillableExpenseInvoice($BillableExpenseInvoice)
    {
        $this->BillableExpenseInvoice = $BillableExpenseInvoice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillableProductInvoice()
    {
        return $this->BillableProductInvoice;
    }

    /**
     * @param boolean $BillableProductInvoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setBillableProductInvoice($BillableProductInvoice)
    {
        $this->BillableProductInvoice = $BillableProductInvoice;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        if ($this->LastUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Agreement
     */
    public function setLastUpdate(\DateTime $LastUpdate = null)
    {
        if ($LastUpdate == null) {
            $this->LastUpdate = null;
        } else {
            $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        }
        return $this;
    }

}
