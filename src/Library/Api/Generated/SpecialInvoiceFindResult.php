<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SpecialInvoiceFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $BillToCompanyId
     */
    protected $BillToCompanyId = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var string $ApplyToType
     */
    protected $ApplyToType = null;

    /**
     * @var int $ApplyToId
     */
    protected $ApplyToId = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @var float $InvoiceTotal
     */
    protected $InvoiceTotal = null;

    /**
     * @var float $RemainingDownpayment
     */
    protected $RemainingDownpayment = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var string $CustomerPO
     */
    protected $CustomerPO = null;

    /**
     * @var string $InvoiceTypeIdentifier
     */
    protected $InvoiceTypeIdentifier = null;

    /**
     * @var string $InvoiceType
     */
    protected $InvoiceType = null;

    /**
     * @var int $BillingStatusId
     */
    protected $BillingStatusId = null;

    /**
     * @var string $BillingStatus
     */
    protected $BillingStatus = null;

    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var int $BillingTermsId
     */
    protected $BillingTermsId = null;

    /**
     * @var string $BillingTerms
     */
    protected $BillingTerms = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var string $Attention
     */
    protected $Attention = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setInvoiceDate(\DateTime $InvoiceDate = null)
    {
        if ($InvoiceDate == null) {
            $this->InvoiceDate = null;
        } else {
            $this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setBillToCompanyId($BillToCompanyId)
    {
        $this->BillToCompanyId = $BillToCompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplyToType()
    {
        return $this->ApplyToType;
    }

    /**
     * @param string $ApplyToType
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setApplyToType($ApplyToType)
    {
        $this->ApplyToType = $ApplyToType;
        return $this;
    }

    /**
     * @return int
     */
    public function getApplyToId()
    {
        return $this->ApplyToId;
    }

    /**
     * @param int $ApplyToId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setApplyToId($ApplyToId)
    {
        $this->ApplyToId = $ApplyToId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setInvoiceTotal($InvoiceTotal)
    {
        $this->InvoiceTotal = $InvoiceTotal;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setRemainingDownpayment($RemainingDownpayment)
    {
        $this->RemainingDownpayment = $RemainingDownpayment;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
        if ($DueDate == null) {
            $this->DueDate = null;
        } else {
            $this->DueDate = $DueDate->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setCustomerPO($CustomerPO)
    {
        $this->CustomerPO = $CustomerPO;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setBillingStatus($BillingStatus)
    {
        $this->BillingStatus = $BillingStatus;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setClosed($Closed)
    {
        $this->Closed = $Closed;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setBillingTermsId($BillingTermsId)
    {
        $this->BillingTermsId = $BillingTermsId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setBillingTerms($BillingTerms)
    {
        $this->BillingTerms = $BillingTerms;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\SpecialInvoiceFindResult
     */
    public function setAttention($Attention)
    {
        $this->Attention = $Attention;
        return $this;
    }

}
