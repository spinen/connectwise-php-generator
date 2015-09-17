<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class InvoiceFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $BillingTypeIdentifier
     */
    protected $BillingTypeIdentifier = null;

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
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var int $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var string $TicketSummary
     */
    protected $TicketSummary = null;

    /**
     * @var \DateTime $InvoiceDate
     */
    protected $InvoiceDate = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $InvoiceType
     */
    protected $InvoiceType = null;

    /**
     * @var string $ProjectName
     */
    protected $ProjectName = null;

    /**
     * @var string $PhaseName
     */
    protected $PhaseName = null;

    /**
     * @var string $Territory
     */
    protected $Territory = null;

    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var boolean $Email
     */
    protected $Email = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var boolean $GlPosted
     */
    protected $GlPosted = null;

    /**
     * @var string $GlBatchIdentifier
     */
    protected $GlBatchIdentifier = null;

    /**
     * @var string $BillingDelivery
     */
    protected $BillingDelivery = null;

    /**
     * @var string $RoutedMemberIdentifier
     */
    protected $RoutedMemberIdentifier = null;

    /**
     * @var string $RoutedMemberName
     */
    protected $RoutedMemberName = null;

    /**
     * @var float $InvoiceAmount
     */
    protected $InvoiceAmount = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var float $PaidAmount
     */
    protected $PaidAmount = null;

    /**
     * @var \DateTime $PaidDate
     */
    protected $PaidDate = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingTypeIdentifier()
    {
        return $this->BillingTypeIdentifier;
    }

    /**
     * @param string $BillingTypeIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setBillingTypeIdentifier($BillingTypeIdentifier)
    {
        $this->BillingTypeIdentifier = $BillingTypeIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setTicketSummary($TicketSummary)
    {
        $this->TicketSummary = $TicketSummary;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setInvoiceType($InvoiceType)
    {
        $this->InvoiceType = $InvoiceType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setPhaseName($PhaseName)
    {
        $this->PhaseName = $PhaseName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setTerritory($Territory)
    {
        $this->Territory = $Territory;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setClosed($Closed)
    {
        $this->Closed = $Closed;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setGlPosted($GlPosted)
    {
        $this->GlPosted = $GlPosted;
        return $this;
    }

    /**
     * @return string
     */
    public function getGlBatchIdentifier()
    {
        return $this->GlBatchIdentifier;
    }

    /**
     * @param string $GlBatchIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setGlBatchIdentifier($GlBatchIdentifier)
    {
        $this->GlBatchIdentifier = $GlBatchIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setBillingDelivery($BillingDelivery)
    {
        $this->BillingDelivery = $BillingDelivery;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setRoutedMemberName($RoutedMemberName)
    {
        $this->RoutedMemberName = $RoutedMemberName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setInvoiceAmount($InvoiceAmount)
    {
        $this->InvoiceAmount = $InvoiceAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
        return $this->StatusId;
    }

    /**
     * @param int $StatusId
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setStatusId($StatusId)
    {
        $this->StatusId = $StatusId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setPaidAmount($PaidAmount)
    {
        $this->PaidAmount = $PaidAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setPaidDate(\DateTime $PaidDate = null)
    {
        if ($PaidDate == null) {
            $this->PaidDate = null;
        } else {
            $this->PaidDate = $PaidDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\InvoiceFindResult
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

}
