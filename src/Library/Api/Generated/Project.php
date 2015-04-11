<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Project
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ProjectName
     */
    protected $ProjectName = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $ProjectManagerId
     */
    protected $ProjectManagerId = null;

    /**
     * @var int $ProjectTypeId
     */
    protected $ProjectTypeId = null;

    /**
     * @var BillingMethods $BillingMethodIdentifier
     */
    protected $BillingMethodIdentifier = null;

    /**
     * @var float $EstimatedRevenue
     */
    protected $EstimatedRevenue = null;

    /**
     * @var \DateTime $EstimatedStart
     */
    protected $EstimatedStart = null;

    /**
     * @var \DateTime $EstimatedEnd
     */
    protected $EstimatedEnd = null;

    /**
     * @var float $EstimatedHours
     */
    protected $EstimatedHours = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var int $TimeApproverId
     */
    protected $TimeApproverId = null;

    /**
     * @var int $ExpenseApproverId
     */
    protected $ExpenseApproverId = null;

    /**
     * @var boolean $BudgetFlag
     */
    protected $BudgetFlag = null;

    /**
     * @var string $BillingRateOption
     */
    protected $BillingRateOption = null;

    /**
     * @var float $HourlyRate
     */
    protected $HourlyRate = null;

    /**
     * @var float $BillingAmount
     */
    protected $BillingAmount = null;

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
     * @var float $Downpayment
     */
    protected $Downpayment = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var string $BillingAttention
     */
    protected $BillingAttention = null;

    /**
     * @var int $ProjectBoardId
     */
    protected $ProjectBoardId = null;

    /**
     * @var string $CustomerPO
     */
    protected $CustomerPO = null;

    /**
     * @var boolean $RestrictDownPayment
     */
    protected $RestrictDownPayment = null;

    /**
     * @var boolean $BillProjectAfterClosed
     */
    protected $BillProjectAfterClosed = null;

    /**
     * @var boolean $BillUnapprovedTimeAndExpense
     */
    protected $BillUnapprovedTimeAndExpense = null;

    /**
     * @var int $ProjectTemplateId
     */
    protected $ProjectTemplateId = null;

    /**
     * @var ProjectSummaryInfo $ProjectSummaryInfo
     */
    protected $ProjectSummaryInfo = null;

    /**
     * @param int $Id
     * @param string $ProjectName
     * @param string $Status
     * @param string $Description
     * @param string $UpdatedBy
     * @param string $BillingRateOption
     * @param string $BillingAttention
     * @param string $CustomerPO
     * @param ProjectSummaryInfo $ProjectSummaryInfo
     */
    public function __construct($Id = null, $ProjectName = null, $Status = null, $Description = null, $UpdatedBy = null, $BillingRateOption = null, $BillingAttention = null, $CustomerPO = null, ProjectSummaryInfo $ProjectSummaryInfo = null)
    {
        $this->Id                 = $Id;
        $this->ProjectName        = $ProjectName;
        $this->Status             = $Status;
        $this->Description        = $Description;
        $this->UpdatedBy          = $UpdatedBy;
        $this->BillingRateOption  = $BillingRateOption;
        $this->BillingAttention   = $BillingAttention;
        $this->CustomerPO         = $CustomerPO;
        $this->ProjectSummaryInfo = $ProjectSummaryInfo;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param int $AddressId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectManagerId()
    {
        return $this->ProjectManagerId;
    }

    /**
     * @param int $ProjectManagerId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setProjectManagerId($ProjectManagerId)
    {
        $this->ProjectManagerId = $ProjectManagerId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setProjectTypeId($ProjectTypeId)
    {
        $this->ProjectTypeId = $ProjectTypeId;
        return $this;
    }

    /**
     * @return BillingMethods
     */
    public function getBillingMethodIdentifier()
    {
        return $this->BillingMethodIdentifier;
    }

    /**
     * @param BillingMethods $BillingMethodIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillingMethodIdentifier(BillingMethods $BillingMethodIdentifier)
    {
        $this->BillingMethodIdentifier = $BillingMethodIdentifier;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedRevenue()
    {
        return $this->EstimatedRevenue;
    }

    /**
     * @param float $EstimatedRevenue
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setEstimatedRevenue($EstimatedRevenue)
    {
        $this->EstimatedRevenue = $EstimatedRevenue;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedStart()
    {
        if ($this->EstimatedStart == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EstimatedStart);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EstimatedStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setEstimatedStart(\DateTime $EstimatedStart)
    {
        $this->EstimatedStart = $EstimatedStart->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEstimatedEnd()
    {
        if ($this->EstimatedEnd == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EstimatedEnd);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EstimatedEnd
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setEstimatedEnd(\DateTime $EstimatedEnd)
    {
        $this->EstimatedEnd = $EstimatedEnd->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedHours()
    {
        return $this->EstimatedHours;
    }

    /**
     * @param float $EstimatedHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setEstimatedHours($EstimatedHours)
    {
        $this->EstimatedHours = $EstimatedHours;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeApproverId()
    {
        return $this->TimeApproverId;
    }

    /**
     * @param int $TimeApproverId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setTimeApproverId($TimeApproverId)
    {
        $this->TimeApproverId = $TimeApproverId;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpenseApproverId()
    {
        return $this->ExpenseApproverId;
    }

    /**
     * @param int $ExpenseApproverId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setExpenseApproverId($ExpenseApproverId)
    {
        $this->ExpenseApproverId = $ExpenseApproverId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBudgetFlag()
    {
        return $this->BudgetFlag;
    }

    /**
     * @param boolean $BudgetFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBudgetFlag($BudgetFlag)
    {
        $this->BudgetFlag = $BudgetFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingRateOption()
    {
        return $this->BillingRateOption;
    }

    /**
     * @param string $BillingRateOption
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillingRateOption($BillingRateOption)
    {
        $this->BillingRateOption = $BillingRateOption;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setHourlyRate($HourlyRate)
    {
        $this->HourlyRate = $HourlyRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getBillingAmount()
    {
        return $this->BillingAmount;
    }

    /**
     * @param float $BillingAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillingAmount($BillingAmount)
    {
        $this->BillingAmount = $BillingAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillableProductInvoice($BillableProductInvoice)
    {
        $this->BillableProductInvoice = $BillableProductInvoice;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownpayment()
    {
        return $this->Downpayment;
    }

    /**
     * @param float $Downpayment
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setDownpayment($Downpayment)
    {
        $this->Downpayment = $Downpayment;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAttention()
    {
        return $this->BillingAttention;
    }

    /**
     * @param string $BillingAttention
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillingAttention($BillingAttention)
    {
        $this->BillingAttention = $BillingAttention;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectBoardId()
    {
        return $this->ProjectBoardId;
    }

    /**
     * @param int $ProjectBoardId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setProjectBoardId($ProjectBoardId)
    {
        $this->ProjectBoardId = $ProjectBoardId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setCustomerPO($CustomerPO)
    {
        $this->CustomerPO = $CustomerPO;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setRestrictDownPayment($RestrictDownPayment)
    {
        $this->RestrictDownPayment = $RestrictDownPayment;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillProjectAfterClosed()
    {
        return $this->BillProjectAfterClosed;
    }

    /**
     * @param boolean $BillProjectAfterClosed
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillProjectAfterClosed($BillProjectAfterClosed)
    {
        $this->BillProjectAfterClosed = $BillProjectAfterClosed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillUnapprovedTimeAndExpense()
    {
        return $this->BillUnapprovedTimeAndExpense;
    }

    /**
     * @param boolean $BillUnapprovedTimeAndExpense
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setBillUnapprovedTimeAndExpense($BillUnapprovedTimeAndExpense)
    {
        $this->BillUnapprovedTimeAndExpense = $BillUnapprovedTimeAndExpense;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectTemplateId()
    {
        return $this->ProjectTemplateId;
    }

    /**
     * @param int $ProjectTemplateId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setProjectTemplateId($ProjectTemplateId)
    {
        $this->ProjectTemplateId = $ProjectTemplateId;
        return $this;
    }

    /**
     * @return ProjectSummaryInfo
     */
    public function getProjectSummaryInfo()
    {
        return $this->ProjectSummaryInfo;
    }

    /**
     * @param ProjectSummaryInfo $ProjectSummaryInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\Project
     */
    public function setProjectSummaryInfo(ProjectSummaryInfo $ProjectSummaryInfo)
    {
        $this->ProjectSummaryInfo = $ProjectSummaryInfo;
        return $this;
    }

}
