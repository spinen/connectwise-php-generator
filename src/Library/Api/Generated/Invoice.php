<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Invoice
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsClientLocation
     */
    protected $IsClientLocation = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var boolean $Email
     */
    protected $Email = null;

    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var boolean $Sent
     */
    protected $Sent = null;

    /**
     * @var boolean $GlPosted
     */
    protected $GlPosted = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var string $InvoiceType
     */
    protected $InvoiceType = null;

    /**
     * @var float $DownpaymentAmount
     */
    protected $DownpaymentAmount = null;

    /**
     * @var float $InvoiceAmount
     */
    protected $InvoiceAmount = null;

    /**
     * @var float $ProjectBillingAmount
     */
    protected $ProjectBillingAmount = null;

    /**
     * @var float $ProjectBillingRate
     */
    protected $ProjectBillingRate = null;

    /**
     * @var float $SalesTaxAmount
     */
    protected $SalesTaxAmount = null;

    /**
     * @var float $TaxableAmount
     */
    protected $TaxableAmount = null;

    /**
     * @var float $TaxRate
     */
    protected $TaxRate = null;

    /**
     * @var float $TicketBillingAmount
     */
    protected $TicketBillingAmount = null;

    /**
     * @var int $DueDays
     */
    protected $DueDays = null;

    /**
     * @var string $AgreementName
     */
    protected $AgreementName = null;

    /**
     * @var string $AgreementType
     */
    protected $AgreementType = null;

    /**
     * @var string $BillingDelivery
     */
    protected $BillingDelivery = null;

    /**
     * @var string $BillingMethod
     */
    protected $BillingMethod = null;

    /**
     * @var string $BillingTerms
     */
    protected $BillingTerms = null;

    /**
     * @var string $BillingTermsXref
     */
    protected $BillingTermsXref = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var string $CurrencyName
     */
    protected $CurrencyName = null;

    /**
     * @var string $CurrencySymbol
     */
    protected $CurrencySymbol = null;

    /**
     * @var string $GlBatchId
     */
    protected $GlBatchId = null;

    /**
     * @var string $TopComment
     */
    protected $TopComment = null;

    /**
     * @var string $BottomComment
     */
    protected $BottomComment = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

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
     * @var string $RoutedMemberIdentifier
     */
    protected $RoutedMemberIdentifier = null;

    /**
     * @var string $RoutedMemberName
     */
    protected $RoutedMemberName = null;

    /**
     * @var string $RemitName
     */
    protected $RemitName = null;

    /**
     * @var string $RemitPhone
     */
    protected $RemitPhone = null;

    /**
     * @var string $SalesRepIdentifier
     */
    protected $SalesRepIdentifier = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $TaxCodeDescription
     */
    protected $TaxCodeDescription = null;

    /**
     * @var string $TaxCode
     */
    protected $TaxCode = null;

    /**
     * @var string $Territory
     */
    protected $Territory = null;

    /**
     * @var int $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var string $TicketResolution
     */
    protected $TicketResolution = null;

    /**
     * @var string $TicketSummary
     */
    protected $TicketSummary = null;

    /**
     * @var Company $Company
     */
    protected $Company = null;

    /**
     * @var Company $BillToCompany
     */
    protected $BillToCompany = null;

    /**
     * @var Contact $Contact
     */
    protected $Contact = null;

    /**
     * @var Address $BillingAddress
     */
    protected $BillingAddress = null;

    /**
     * @var Address $RemitAddress
     */
    protected $RemitAddress = null;

    /**
     * @var ArrayOfExpenseDetail $ExpenseDetails
     */
    protected $ExpenseDetails = null;

    /**
     * @var ArrayOfProductDetail $ProductDetails
     */
    protected $ProductDetails = null;

    /**
     * @var ArrayOfTimeDetail $TimeDetails
     */
    protected $TimeDetails = null;

    /**
     * @var ArrayOfSalesTaxDetail $SalesTaxDetails
     */
    protected $SalesTaxDetails = null;

    /**
     * @var ArrayOfAgreementDetail $AgreementDetails
     */
    protected $AgreementDetails = null;

    /**
     * @var \DateTime $PaidDate
     */
    protected $PaidDate = null;

    /**
     * @var float $PaidAmount
     */
    protected $PaidAmount = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var boolean $ProcessingFlag
     */
    protected $ProcessingFlag = null;

    /**
     * @var \DateTime $ProcessingDate
     */
    protected $ProcessingDate = null;

    /**
     * @var string $SalesRepFullName
     */
    protected $SalesRepFullName = null;

    /**
     * @param int $Id
     * @param boolean $IsClientLocation
     * @param boolean $Taxable
     * @param boolean $Email
     * @param boolean $Closed
     * @param boolean $Sent
     * @param boolean $GlPosted
     * @param \DateTime $DueDate
     * @param \DateTime $InvoiceDate
     * @param float $DownpaymentAmount
     * @param float $InvoiceAmount
     * @param float $ProjectBillingAmount
     * @param float $ProjectBillingRate
     * @param float $SalesTaxAmount
     * @param float $TaxableAmount
     * @param float $TaxRate
     * @param float $TicketBillingAmount
     * @param int $DueDays
     * @param int $ProjectNumber
     * @param int $TicketNumber
     * @param \DateTime $PaidDate
     * @param float $PaidAmount
     * @param \DateTime $LastUpdated
     * @param boolean $ProcessingFlag
     * @param \DateTime $ProcessingDate
     */
    public function __construct($Id = null, $IsClientLocation = null, $Taxable = null, $Email = null, $Closed = null, $Sent = null, $GlPosted = null, \DateTime $DueDate = null, \DateTime $InvoiceDate = null, $DownpaymentAmount = null, $InvoiceAmount = null, $ProjectBillingAmount = null, $ProjectBillingRate = null, $SalesTaxAmount = null, $TaxableAmount = null, $TaxRate = null, $TicketBillingAmount = null, $DueDays = null, $ProjectNumber = null, $TicketNumber = null, \DateTime $PaidDate = null, $PaidAmount = null, \DateTime $LastUpdated = null, $ProcessingFlag = null, \DateTime $ProcessingDate = null)
    {
        $this->Id                   = $Id;
        $this->IsClientLocation     = $IsClientLocation;
        $this->Taxable              = $Taxable;
        $this->Email                = $Email;
        $this->Closed               = $Closed;
        $this->Sent                 = $Sent;
        $this->GlPosted             = $GlPosted;
        $this->DueDate              = $DueDate ? $DueDate->format(\DateTime::ATOM) : null;
        $this->InvoiceDate          = $InvoiceDate ? $InvoiceDate->format(\DateTime::ATOM) : null;
        $this->DownpaymentAmount    = $DownpaymentAmount;
        $this->InvoiceAmount        = $InvoiceAmount;
        $this->ProjectBillingAmount = $ProjectBillingAmount;
        $this->ProjectBillingRate   = $ProjectBillingRate;
        $this->SalesTaxAmount       = $SalesTaxAmount;
        $this->TaxableAmount        = $TaxableAmount;
        $this->TaxRate              = $TaxRate;
        $this->TicketBillingAmount  = $TicketBillingAmount;
        $this->DueDays              = $DueDays;
        $this->ProjectNumber        = $ProjectNumber;
        $this->TicketNumber         = $TicketNumber;
        $this->PaidDate             = $PaidDate ? $PaidDate->format(\DateTime::ATOM) : null;
        $this->PaidAmount           = $PaidAmount;
        $this->LastUpdated          = $LastUpdated ? $LastUpdated->format(\DateTime::ATOM) : null;
        $this->ProcessingFlag       = $ProcessingFlag;
        $this->ProcessingDate       = $ProcessingDate ? $ProcessingDate->format(\DateTime::ATOM) : null;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClientLocation()
    {
        return $this->IsClientLocation;
    }

    /**
     * @param boolean $IsClientLocation
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setIsClientLocation($IsClientLocation)
    {
        $this->IsClientLocation = $IsClientLocation;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param boolean $Email
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosed()
    {
        return $this->Closed;
    }

    /**
     * @param boolean $Closed
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setClosed($Closed)
    {
        $this->Closed = $Closed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSent()
    {
        return $this->Sent;
    }

    /**
     * @param boolean $Sent
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setSent($Sent)
    {
        $this->Sent = $Sent;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getGlPosted()
    {
        return $this->GlPosted;
    }

    /**
     * @param boolean $GlPosted
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setGlPosted($GlPosted)
    {
        $this->GlPosted = $GlPosted;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setDueDate(\DateTime $DueDate)
    {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setInvoiceDate(\DateTime $InvoiceDate)
    {
        $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;
        return $this;
    }

    /**
     * @return float
     */
    public function getDownpaymentAmount()
    {
        return $this->DownpaymentAmount;
    }

    /**
     * @param float $DownpaymentAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setDownpaymentAmount($DownpaymentAmount)
    {
        $this->DownpaymentAmount = $DownpaymentAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoiceAmount()
    {
        return $this->InvoiceAmount;
    }

    /**
     * @param float $InvoiceAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setInvoiceAmount($InvoiceAmount)
    {
        $this->InvoiceAmount = $InvoiceAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getProjectBillingAmount()
    {
        return $this->ProjectBillingAmount;
    }

    /**
     * @param float $ProjectBillingAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setProjectBillingAmount($ProjectBillingAmount)
    {
        $this->ProjectBillingAmount = $ProjectBillingAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getProjectBillingRate()
    {
        return $this->ProjectBillingRate;
    }

    /**
     * @param float $ProjectBillingRate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setProjectBillingRate($ProjectBillingRate)
    {
        $this->ProjectBillingRate = $ProjectBillingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getSalesTaxAmount()
    {
        return $this->SalesTaxAmount;
    }

    /**
     * @param float $SalesTaxAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setSalesTaxAmount($SalesTaxAmount)
    {
        $this->SalesTaxAmount = $SalesTaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxableAmount()
    {
        return $this->TaxableAmount;
    }

    /**
     * @param float $TaxableAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTaxableAmount($TaxableAmount)
    {
        $this->TaxableAmount = $TaxableAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTaxRate($TaxRate)
    {
        $this->TaxRate = $TaxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTicketBillingAmount()
    {
        return $this->TicketBillingAmount;
    }

    /**
     * @param float $TicketBillingAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTicketBillingAmount($TicketBillingAmount)
    {
        $this->TicketBillingAmount = $TicketBillingAmount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDueDays()
    {
        return $this->DueDays;
    }

    /**
     * @param int $DueDays
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setDueDays($DueDays)
    {
        $this->DueDays = $DueDays;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setAgreementType($AgreementType)
    {
        $this->AgreementType = $AgreementType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingDelivery()
    {
        return $this->BillingDelivery;
    }

    /**
     * @param string $BillingDelivery
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBillingDelivery($BillingDelivery)
    {
        $this->BillingDelivery = $BillingDelivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingMethod()
    {
        return $this->BillingMethod;
    }

    /**
     * @param string $BillingMethod
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBillingMethod($BillingMethod)
    {
        $this->BillingMethod = $BillingMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingTerms()
    {
        return $this->BillingTerms;
    }

    /**
     * @param string $BillingTerms
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBillingTerms($BillingTerms)
    {
        $this->BillingTerms = $BillingTerms;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingTermsXref()
    {
        return $this->BillingTermsXref;
    }

    /**
     * @param string $BillingTermsXref
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBillingTermsXref($BillingTermsXref)
    {
        $this->BillingTermsXref = $BillingTermsXref;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName()
    {
        return $this->CurrencyName;
    }

    /**
     * @param string $CurrencyName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setCurrencyName($CurrencyName)
    {
        $this->CurrencyName = $CurrencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencySymbol()
    {
        return $this->CurrencySymbol;
    }

    /**
     * @param string $CurrencySymbol
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setCurrencySymbol($CurrencySymbol)
    {
        $this->CurrencySymbol = $CurrencySymbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlBatchId()
    {
        return $this->GlBatchId;
    }

    /**
     * @param string $GlBatchId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setGlBatchId($GlBatchId)
    {
        $this->GlBatchId = $GlBatchId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBottomComment($BottomComment)
    {
        $this->BottomComment = $BottomComment;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
        return $this->PoNumber;
    }

    /**
     * @param string $PoNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setPoNumber($PoNumber)
    {
        $this->PoNumber = $PoNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setPhaseName($PhaseName)
    {
        $this->PhaseName = $PhaseName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutedMemberIdentifier()
    {
        return $this->RoutedMemberIdentifier;
    }

    /**
     * @param string $RoutedMemberIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setRoutedMemberIdentifier($RoutedMemberIdentifier)
    {
        $this->RoutedMemberIdentifier = $RoutedMemberIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutedMemberName()
    {
        return $this->RoutedMemberName;
    }

    /**
     * @param string $RoutedMemberName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setRoutedMemberName($RoutedMemberName)
    {
        $this->RoutedMemberName = $RoutedMemberName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemitName()
    {
        return $this->RemitName;
    }

    /**
     * @param string $RemitName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setRemitName($RemitName)
    {
        $this->RemitName = $RemitName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemitPhone()
    {
        return $this->RemitPhone;
    }

    /**
     * @param string $RemitPhone
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setRemitPhone($RemitPhone)
    {
        $this->RemitPhone = $RemitPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesRepIdentifier()
    {
        return $this->SalesRepIdentifier;
    }

    /**
     * @param string $SalesRepIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setSalesRepIdentifier($SalesRepIdentifier)
    {
        $this->SalesRepIdentifier = $SalesRepIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCodeDescription()
    {
        return $this->TaxCodeDescription;
    }

    /**
     * @param string $TaxCodeDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTaxCodeDescription($TaxCodeDescription)
    {
        $this->TaxCodeDescription = $TaxCodeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }

    /**
     * @param string $TaxCode
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTaxCode($TaxCode)
    {
        $this->TaxCode = $TaxCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerritory()
    {
        return $this->Territory;
    }

    /**
     * @param string $Territory
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTerritory($Territory)
    {
        $this->Territory = $Territory;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTicketNumber($TicketNumber)
    {
        $this->TicketNumber = $TicketNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTicketResolution()
    {
        return $this->TicketResolution;
    }

    /**
     * @param string $TicketResolution
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTicketResolution($TicketResolution)
    {
        $this->TicketResolution = $TicketResolution;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTicketSummary($TicketSummary)
    {
        $this->TicketSummary = $TicketSummary;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param Company $Company
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setCompany(Company $Company)
    {
        $this->Company = $Company;
        return $this;
    }

    /**
     * @return Company
     */
    public function getBillToCompany()
    {
        return $this->BillToCompany;
    }

    /**
     * @param Company $BillToCompany
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBillToCompany(Company $BillToCompany)
    {
        $this->BillToCompany = $BillToCompany;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param Contact $Contact
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setContact(Contact $Contact)
    {
        $this->Contact = $Contact;
        return $this;
    }

    /**
     * @return Address
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }

    /**
     * @param Address $BillingAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setBillingAddress(Address $BillingAddress)
    {
        $this->BillingAddress = $BillingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getRemitAddress()
    {
        return $this->RemitAddress;
    }

    /**
     * @param Address $RemitAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setRemitAddress(Address $RemitAddress)
    {
        $this->RemitAddress = $RemitAddress;
        return $this;
    }

    /**
     * @return ArrayOfExpenseDetail
     */
    public function getExpenseDetails()
    {
        return $this->ExpenseDetails;
    }

    /**
     * @param ArrayOfExpenseDetail $ExpenseDetails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setExpenseDetails($ExpenseDetails)
    {
        $this->ExpenseDetails = $ExpenseDetails;
        return $this;
    }

    /**
     * @return ArrayOfProductDetail
     */
    public function getProductDetails()
    {
        return $this->ProductDetails;
    }

    /**
     * @param ArrayOfProductDetail $ProductDetails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setProductDetails($ProductDetails)
    {
        $this->ProductDetails = $ProductDetails;
        return $this;
    }

    /**
     * @return ArrayOfTimeDetail
     */
    public function getTimeDetails()
    {
        return $this->TimeDetails;
    }

    /**
     * @param ArrayOfTimeDetail $TimeDetails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setTimeDetails($TimeDetails)
    {
        $this->TimeDetails = $TimeDetails;
        return $this;
    }

    /**
     * @return ArrayOfSalesTaxDetail
     */
    public function getSalesTaxDetails()
    {
        return $this->SalesTaxDetails;
    }

    /**
     * @param ArrayOfSalesTaxDetail $SalesTaxDetails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setSalesTaxDetails($SalesTaxDetails)
    {
        $this->SalesTaxDetails = $SalesTaxDetails;
        return $this;
    }

    /**
     * @return ArrayOfAgreementDetail
     */
    public function getAgreementDetails()
    {
        return $this->AgreementDetails;
    }

    /**
     * @param ArrayOfAgreementDetail $AgreementDetails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setAgreementDetails($AgreementDetails)
    {
        $this->AgreementDetails = $AgreementDetails;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPaidDate()
    {
        if ($this->PaidDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PaidDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PaidDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setPaidDate(\DateTime $PaidDate)
    {
        $this->PaidDate = $PaidDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getPaidAmount()
    {
        return $this->PaidAmount;
    }

    /**
     * @param float $PaidAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setPaidAmount($PaidAmount)
    {
        $this->PaidAmount = $PaidAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getProcessingFlag()
    {
        return $this->ProcessingFlag;
    }

    /**
     * @param boolean $ProcessingFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setProcessingFlag($ProcessingFlag)
    {
        $this->ProcessingFlag = $ProcessingFlag;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getProcessingDate()
    {
        if ($this->ProcessingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ProcessingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ProcessingDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setProcessingDate(\DateTime $ProcessingDate)
    {
        $this->ProcessingDate = $ProcessingDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getSalesRepFullName()
    {
        return $this->SalesRepFullName;
    }

    /**
     * @param string $SalesRepFullName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Invoice
     */
    public function setSalesRepFullName($SalesRepFullName)
    {
        $this->SalesRepFullName = $SalesRepFullName;
        return $this;
    }

}
