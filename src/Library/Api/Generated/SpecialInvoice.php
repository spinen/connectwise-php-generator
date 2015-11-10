<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SpecialInvoice
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $BillToCompanyId
     */
    protected $BillToCompanyId = null;

    /**
     * @var ApplyTo $ApplyTo
     */
    protected $ApplyTo = null;

    /**
     * @var string $Attention
     */
    protected $Attention = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var int $BillingTermsId
     */
    protected $BillingTermsId = null;

    /**
     * @var string $Reference
     */
    protected $Reference = null;

    /**
     * @var string $CustomerPO
     */
    protected $CustomerPO = null;

    /**
     * @var int $InvoiceTemplateId
     */
    protected $InvoiceTemplateId = null;

    /**
     * @var int $InvoiceEmailTemplateId
     */
    protected $InvoiceEmailTemplateId = null;

    /**
     * @var boolean $AddToBatchEmailList
     */
    protected $AddToBatchEmailList = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $InvoiceTypeIdentifier
     */
    protected $InvoiceTypeIdentifier = null;

    /**
     * @var string $InvoiceType
     */
    protected $InvoiceType = null;

    /**
     * @var boolean $RestrictDownpayment
     */
    protected $RestrictDownpayment = null;

    /**
     * @var int $BillingStatusId
     */
    protected $BillingStatusId = null;

    /**
     * @var string $BillingStatus
     */
    protected $BillingStatus = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $DepartmentId
     */
    protected $DepartmentId = null;

    /**
     * @var int $TerritoryId
     */
    protected $TerritoryId = null;

    /**
     * @var string $TopComment
     */
    protected $TopComment = null;

    /**
     * @var string $BottomComment
     */
    protected $BottomComment = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var int $TaxCodeId
     */
    protected $TaxCodeId = null;

    /**
     * @var string $InternalNotes
     */
    protected $InternalNotes = null;

    /**
     * @var boolean $DownpaymentPreviouslyTaxed
     */
    protected $DownpaymentPreviouslyTaxed = null;

    /**
     * @var ArrayOfSpecialInvoiceProduct $SpecialInvoiceProducts
     */
    protected $SpecialInvoiceProducts = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var float $ExpenseTotal
     */
    protected $ExpenseTotal = null;

    /**
     * @var float $ProductTotal
     */
    protected $ProductTotal = null;

    /**
     * @var float $PreviousProgressApplied
     */
    protected $PreviousProgressApplied = null;

    /**
     * @var float $ServiceAdjustmentAmount
     */
    protected $ServiceAdjustmentAmount = null;

    /**
     * @var float $AgreementAmount
     */
    protected $AgreementAmount = null;

    /**
     * @var float $DownpaymentApplied
     */
    protected $DownpaymentApplied = null;

    /**
     * @var float $InvoiceSubtotal
     */
    protected $InvoiceSubtotal = null;

    /**
     * @var float $RemainingDownpayment
     */
    protected $RemainingDownpayment = null;

    /**
     * @var float $SalesTax
     */
    protected $SalesTax = null;

    /**
     * @var float $InvoiceTotal
     */
    protected $InvoiceTotal = null;

    /**
     * @var string $AdjustmentReason
     */
    protected $AdjustmentReason = null;

    /**
     * @var string $By
     */
    protected $By = null;

    /**
     * @var float $Payments
     */
    protected $Payments = null;

    /**
     * @var float $Credits
     */
    protected $Credits = null;

    /**
     * @var float $InvoiceBalance
     */
    protected $InvoiceBalance = null;

    /**
     * @param int $Id
     * @param int $CompanyId
     * @param ApplyTo $ApplyTo
     * @param string $Attention
     * @param string $Reference
     * @param string $CustomerPO
     * @param string $InvoiceNumber
     * @param string $InvoiceTypeIdentifier
     * @param string $InvoiceType
     * @param string $BillingStatus
     * @param string $TopComment
     * @param string $BottomComment
     * @param string $InternalNotes
     * @param ArrayOfSpecialInvoiceProduct $SpecialInvoiceProducts
     * @param string $AdjustmentReason
     * @param string $By
     */
    public function __construct($Id = null, $CompanyId = null, ApplyTo $ApplyTo = null, $Attention = null, $Reference = null, $CustomerPO = null, $InvoiceNumber = null, $InvoiceTypeIdentifier = null, $InvoiceType = null, $BillingStatus = null, $TopComment = null, $BottomComment = null, $InternalNotes = null, $SpecialInvoiceProducts = null, $AdjustmentReason = null, $By = null)
    {
        $this->Id                     = $Id;
        $this->CompanyId              = $CompanyId;
        $this->ApplyTo                = $ApplyTo;
        $this->Attention              = $Attention;
        $this->Reference              = $Reference;
        $this->CustomerPO             = $CustomerPO;
        $this->InvoiceNumber          = $InvoiceNumber;
        $this->InvoiceTypeIdentifier  = $InvoiceTypeIdentifier;
        $this->InvoiceType            = $InvoiceType;
        $this->BillingStatus          = $BillingStatus;
        $this->TopComment             = $TopComment;
        $this->BottomComment          = $BottomComment;
        $this->InternalNotes          = $InternalNotes;
        $this->SpecialInvoiceProducts = $SpecialInvoiceProducts;
        $this->AdjustmentReason       = $AdjustmentReason;
        $this->By                     = $By;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setBillToCompanyId($BillToCompanyId)
    {
        $this->BillToCompanyId = $BillToCompanyId;
        return $this;
    }

    /**
     * @return ApplyTo
     */
    public function getApplyTo()
    {
        return $this->ApplyTo;
    }

    /**
     * @param ApplyTo $ApplyTo
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setApplyTo(ApplyTo $ApplyTo)
    {
        $this->ApplyTo = $ApplyTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAttention()
    {
        return $this->Attention;
    }

    /**
     * @param string $Attention
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setAttention($Attention)
    {
        $this->Attention = $Attention;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingTermsId()
    {
        return $this->BillingTermsId;
    }

    /**
     * @param int $BillingTermsId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setBillingTermsId($BillingTermsId)
    {
        $this->BillingTermsId = $BillingTermsId;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setReference($Reference)
    {
        $this->Reference = $Reference;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setCustomerPO($CustomerPO)
    {
        $this->CustomerPO = $CustomerPO;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceTemplateId($InvoiceTemplateId)
    {
        $this->InvoiceTemplateId = $InvoiceTemplateId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceEmailTemplateId()
    {
        return $this->InvoiceEmailTemplateId;
    }

    /**
     * @param int $InvoiceEmailTemplateId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceEmailTemplateId($InvoiceEmailTemplateId)
    {
        $this->InvoiceEmailTemplateId = $InvoiceEmailTemplateId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddToBatchEmailList()
    {
        return $this->AddToBatchEmailList;
    }

    /**
     * @param boolean $AddToBatchEmailList
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setAddToBatchEmailList($AddToBatchEmailList)
    {
        $this->AddToBatchEmailList = $AddToBatchEmailList;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        if ($this->InvoiceDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->InvoiceDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $InvoiceDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceTypeIdentifier()
    {
        return $this->InvoiceTypeIdentifier;
    }

    /**
     * @param string $InvoiceTypeIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceTypeIdentifier($InvoiceTypeIdentifier)
    {
        $this->InvoiceTypeIdentifier = $InvoiceTypeIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->InvoiceType;
    }

    /**
     * @param string $InvoiceType
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictDownpayment()
    {
        return $this->RestrictDownpayment;
    }

    /**
     * @param boolean $RestrictDownpayment
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setRestrictDownpayment($RestrictDownpayment)
    {
        $this->RestrictDownpayment = $RestrictDownpayment;
        return $this;
    }

    /**
     * @return int
     */
    public function getBillingStatusId()
    {
        return $this->BillingStatusId;
    }

    /**
     * @param int $BillingStatusId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setBillingStatusId($BillingStatusId)
    {
        $this->BillingStatusId = $BillingStatusId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingStatus()
    {
        return $this->BillingStatus;
    }

    /**
     * @param string $BillingStatus
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setBillingStatus($BillingStatus)
    {
        $this->BillingStatus = $BillingStatus;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setDepartmentId($DepartmentId)
    {
        $this->DepartmentId = $DepartmentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTerritoryId()
    {
        return $this->TerritoryId;
    }

    /**
     * @param int $TerritoryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setTerritoryId($TerritoryId)
    {
        $this->TerritoryId = $TerritoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTopComment()
    {
        return $this->TopComment;
    }

    /**
     * @param string $TopComment
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setTopComment($TopComment)
    {
        $this->TopComment = $TopComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getBottomComment()
    {
        return $this->BottomComment;
    }

    /**
     * @param string $BottomComment
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setBottomComment($BottomComment)
    {
        $this->BottomComment = $BottomComment;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param float $Total
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setTaxCodeId($TaxCodeId)
    {
        $this->TaxCodeId = $TaxCodeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDownpaymentPreviouslyTaxed()
    {
        return $this->DownpaymentPreviouslyTaxed;
    }

    /**
     * @param boolean $DownpaymentPreviouslyTaxed
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setDownpaymentPreviouslyTaxed($DownpaymentPreviouslyTaxed)
    {
        $this->DownpaymentPreviouslyTaxed = $DownpaymentPreviouslyTaxed;
        return $this;
    }

    /**
     * @return ArrayOfSpecialInvoiceProduct
     */
    public function getSpecialInvoiceProducts()
    {
        return $this->SpecialInvoiceProducts;
    }

    /**
     * @param ArrayOfSpecialInvoiceProduct $SpecialInvoiceProducts
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setSpecialInvoiceProducts($SpecialInvoiceProducts)
    {
        $this->SpecialInvoiceProducts = $SpecialInvoiceProducts;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        if ($this->DueDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DueDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DueDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setDueDate(\DateTime $DueDate)
    {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getExpenseTotal()
    {
        return $this->ExpenseTotal;
    }

    /**
     * @param float $ExpenseTotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setExpenseTotal($ExpenseTotal)
    {
        $this->ExpenseTotal = $ExpenseTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductTotal()
    {
        return $this->ProductTotal;
    }

    /**
     * @param float $ProductTotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setProductTotal($ProductTotal)
    {
        $this->ProductTotal = $ProductTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getPreviousProgressApplied()
    {
        return $this->PreviousProgressApplied;
    }

    /**
     * @param float $PreviousProgressApplied
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setPreviousProgressApplied($PreviousProgressApplied)
    {
        $this->PreviousProgressApplied = $PreviousProgressApplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getServiceAdjustmentAmount()
    {
        return $this->ServiceAdjustmentAmount;
    }

    /**
     * @param float $ServiceAdjustmentAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setServiceAdjustmentAmount($ServiceAdjustmentAmount)
    {
        $this->ServiceAdjustmentAmount = $ServiceAdjustmentAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setAgreementAmount($AgreementAmount)
    {
        $this->AgreementAmount = $AgreementAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownpaymentApplied()
    {
        return $this->DownpaymentApplied;
    }

    /**
     * @param float $DownpaymentApplied
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setDownpaymentApplied($DownpaymentApplied)
    {
        $this->DownpaymentApplied = $DownpaymentApplied;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoiceSubtotal()
    {
        return $this->InvoiceSubtotal;
    }

    /**
     * @param float $InvoiceSubtotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceSubtotal($InvoiceSubtotal)
    {
        $this->InvoiceSubtotal = $InvoiceSubtotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRemainingDownpayment()
    {
        return $this->RemainingDownpayment;
    }

    /**
     * @param float $RemainingDownpayment
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setRemainingDownpayment($RemainingDownpayment)
    {
        $this->RemainingDownpayment = $RemainingDownpayment;
        return $this;
    }

    /**
     * @return float
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }

    /**
     * @param float $SalesTax
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setSalesTax($SalesTax)
    {
        $this->SalesTax = $SalesTax;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoiceTotal()
    {
        return $this->InvoiceTotal;
    }

    /**
     * @param float $InvoiceTotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceTotal($InvoiceTotal)
    {
        $this->InvoiceTotal = $InvoiceTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentReason()
    {
        return $this->AdjustmentReason;
    }

    /**
     * @param string $AdjustmentReason
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setAdjustmentReason($AdjustmentReason)
    {
        $this->AdjustmentReason = $AdjustmentReason;
        return $this;
    }

    /**
     * @return string
     */
    public function getBy()
    {
        return $this->By;
    }

    /**
     * @param string $By
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setBy($By)
    {
        $this->By = $By;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayments()
    {
        return $this->Payments;
    }

    /**
     * @param float $Payments
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setPayments($Payments)
    {
        $this->Payments = $Payments;
        return $this;
    }

    /**
     * @return float
     */
    public function getCredits()
    {
        return $this->Credits;
    }

    /**
     * @param float $Credits
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setCredits($Credits)
    {
        $this->Credits = $Credits;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoiceBalance()
    {
        return $this->InvoiceBalance;
    }

    /**
     * @param float $InvoiceBalance
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoice
     */
    public function setInvoiceBalance($InvoiceBalance)
    {
        $this->InvoiceBalance = $InvoiceBalance;
        return $this;
    }

}
