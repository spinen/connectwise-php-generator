<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Opportunity
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $OpportunityName
     */
    protected $OpportunityName = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $Stage
     */
    protected $Stage = null;

    /**
     * @var \DateTime $PipelineChangeDate
     */
    protected $PipelineChangeDate = null;

    /**
     * @var string $Rating
     */
    protected $Rating = null;

    /**
     * @var int $CloseProbability
     */
    protected $CloseProbability = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var \DateTime $DateBecameLead
     */
    protected $DateBecameLead = null;

    /**
     * @var \DateTime $DateBecameLeadUtc
     */
    protected $DateBecameLeadUtc = null;

    /**
     * @var \DateTime $ExpectedCloseDate
     */
    protected $ExpectedCloseDate = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var \DateTime $DateClosed
     */
    protected $DateClosed = null;

    /**
     * @var string $ClosedBy
     */
    protected $ClosedBy = null;

    /**
     * @var string $EnteredBy
     */
    protected $EnteredBy = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var CompanyAddress $CompanyAddress
     */
    protected $CompanyAddress = null;

    /**
     * @var CompanyAddress $RemitAddress
     */
    protected $RemitAddress = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $OpportunityType
     */
    protected $OpportunityType = null;

    /**
     * @var string $ProjectName
     */
    protected $ProjectName = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $MarketingCampaign
     */
    protected $MarketingCampaign = null;

    /**
     * @var string $AgreementType
     */
    protected $AgreementType = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $Urgency
     */
    protected $Urgency = null;

    /**
     * @var string $PrimarySalesRep
     */
    protected $PrimarySalesRep = null;

    /**
     * @var string $SecondarySalesRep
     */
    protected $SecondarySalesRep = null;

    /**
     * @var string $PrimarySalesRepFullName
     */
    protected $PrimarySalesRepFullName = null;

    /**
     * @var string $SecondarySalesRepFullName
     */
    protected $SecondarySalesRepFullName = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $CustomerPO
     */
    protected $CustomerPO = null;

    /**
     * @var float $TotalSalesTax
     */
    protected $TotalSalesTax = null;

    /**
     * @var int $ApprovedById
     */
    protected $ApprovedById = null;

    /**
     * @var \DateTime $ApprovedDate
     */
    protected $ApprovedDate = null;

    /**
     * @var int $RejectedById
     */
    protected $RejectedById = null;

    /**
     * @var \DateTime $RejectedDate
     */
    protected $RejectedDate = null;

    /**
     * @var ArrayOfNote $Notes
     */
    protected $Notes = null;

    /**
     * @var ArrayOfOpportunityItem $OpportunityItems
     */
    protected $OpportunityItems = null;

    /**
     * @var ArrayOfForecastDetail $ForecastDetails
     */
    protected $ForecastDetails = null;

    /**
     * @var ArrayOfOpportunityCustomField $OpportunityCustomFields
     */
    protected $OpportunityCustomFields = null;

    /**
     * @var OpportunityTeam $OpportunityTeam
     */
    protected $OpportunityTeam = null;

    /**
     * @param int $Id
     * @param int $CompanyId
     * @param int $ContactId
     * @param \DateTime $PipelineChangeDate
     * @param int $CloseProbability
     * @param \DateTime $DateBecameLead
     * @param \DateTime $ExpectedCloseDate
     * @param \DateTime $DateClosed
     * @param int $TicketId
     * @param \DateTime $LastUpdated
     * @param int $ApprovedById
     * @param \DateTime $ApprovedDate
     * @param int $RejectedById
     * @param \DateTime $RejectedDate
     */
    public function __construct($Id = null, $CompanyId = null, $ContactId = null, \DateTime $PipelineChangeDate = null, $CloseProbability = null, \DateTime $DateBecameLead = null, \DateTime $ExpectedCloseDate = null, \DateTime $DateClosed = null, $TicketId = null, \DateTime $LastUpdated = null, $ApprovedById = null, \DateTime $ApprovedDate = null, $RejectedById = null, \DateTime $RejectedDate = null)
    {
        $this->Id                 = $Id;
        $this->CompanyId          = $CompanyId;
        $this->ContactId          = $ContactId;
        $this->PipelineChangeDate = $PipelineChangeDate ? $PipelineChangeDate->format(\DateTime::ATOM) : null;
        $this->CloseProbability   = $CloseProbability;
        $this->DateBecameLead     = $DateBecameLead ? $DateBecameLead->format(\DateTime::ATOM) : null;
        $this->ExpectedCloseDate  = $ExpectedCloseDate ? $ExpectedCloseDate->format(\DateTime::ATOM) : null;
        $this->DateClosed         = $DateClosed ? $DateClosed->format(\DateTime::ATOM) : null;
        $this->TicketId           = $TicketId;
        $this->LastUpdated        = $LastUpdated ? $LastUpdated->format(\DateTime::ATOM) : null;
        $this->ApprovedById       = $ApprovedById;
        $this->ApprovedDate       = $ApprovedDate ? $ApprovedDate->format(\DateTime::ATOM) : null;
        $this->RejectedById       = $RejectedById;
        $this->RejectedDate       = $RejectedDate ? $RejectedDate->format(\DateTime::ATOM) : null;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->OpportunityName;
    }

    /**
     * @param string $OpportunityName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setOpportunityName($OpportunityName)
    {
        $this->OpportunityName = $OpportunityName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyIdentifier()
    {
        return $this->CompanyIdentifier;
    }

    /**
     * @param string $CompanyIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStage()
    {
        return $this->Stage;
    }

    /**
     * @param string $Stage
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setStage($Stage)
    {
        $this->Stage = $Stage;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPipelineChangeDate()
    {
        if ($this->PipelineChangeDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PipelineChangeDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PipelineChangeDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setPipelineChangeDate(\DateTime $PipelineChangeDate)
    {
        $this->PipelineChangeDate = $PipelineChangeDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->Rating;
    }

    /**
     * @param string $Rating
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setRating($Rating)
    {
        $this->Rating = $Rating;
        return $this;
    }

    /**
     * @return int
     */
    public function getCloseProbability()
    {
        return $this->CloseProbability;
    }

    /**
     * @param int $CloseProbability
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setCloseProbability($CloseProbability)
    {
        $this->CloseProbability = $CloseProbability;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param string $Source
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setSource($Source)
    {
        $this->Source = $Source;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateBecameLead()
    {
        if ($this->DateBecameLead == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateBecameLead);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateBecameLead
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setDateBecameLead(\DateTime $DateBecameLead)
    {
        $this->DateBecameLead = $DateBecameLead->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateBecameLeadUtc()
    {
        if ($this->DateBecameLeadUtc == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateBecameLeadUtc);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateBecameLeadUtc
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setDateBecameLeadUtc(\DateTime $DateBecameLeadUtc = null)
    {
        if ($DateBecameLeadUtc == null) {
            $this->DateBecameLeadUtc = null;
        } else {
            $this->DateBecameLeadUtc = $DateBecameLeadUtc->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedCloseDate()
    {
        if ($this->ExpectedCloseDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ExpectedCloseDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpectedCloseDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setExpectedCloseDate(\DateTime $ExpectedCloseDate)
    {
        $this->ExpectedCloseDate = $ExpectedCloseDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateClosed()
    {
        if ($this->DateClosed == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateClosed);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateClosed
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setDateClosed(\DateTime $DateClosed)
    {
        $this->DateClosed = $DateClosed->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getClosedBy()
    {
        return $this->ClosedBy;
    }

    /**
     * @param string $ClosedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setClosedBy($ClosedBy)
    {
        $this->ClosedBy = $ClosedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnteredBy()
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setEnteredBy($EnteredBy)
    {
        $this->EnteredBy = $EnteredBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return CompanyAddress
     */
    public function getCompanyAddress()
    {
        return $this->CompanyAddress;
    }

    /**
     * @param CompanyAddress $CompanyAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setCompanyAddress(CompanyAddress $CompanyAddress)
    {
        $this->CompanyAddress = $CompanyAddress;
        return $this;
    }

    /**
     * @return CompanyAddress
     */
    public function getRemitAddress()
    {
        return $this->RemitAddress;
    }

    /**
     * @param CompanyAddress $RemitAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setRemitAddress(CompanyAddress $RemitAddress)
    {
        $this->RemitAddress = $RemitAddress;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityType()
    {
        return $this->OpportunityType;
    }

    /**
     * @param string $OpportunityType
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setOpportunityType($OpportunityType)
    {
        $this->OpportunityType = $OpportunityType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarketingCampaign()
    {
        return $this->MarketingCampaign;
    }

    /**
     * @param string $MarketingCampaign
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setMarketingCampaign($MarketingCampaign)
    {
        $this->MarketingCampaign = $MarketingCampaign;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setAgreementType($AgreementType)
    {
        $this->AgreementType = $AgreementType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrgency()
    {
        return $this->Urgency;
    }

    /**
     * @param string $Urgency
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setUrgency($Urgency)
    {
        $this->Urgency = $Urgency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimarySalesRep()
    {
        return $this->PrimarySalesRep;
    }

    /**
     * @param string $PrimarySalesRep
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setPrimarySalesRep($PrimarySalesRep)
    {
        $this->PrimarySalesRep = $PrimarySalesRep;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondarySalesRep()
    {
        return $this->SecondarySalesRep;
    }

    /**
     * @param string $SecondarySalesRep
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setSecondarySalesRep($SecondarySalesRep)
    {
        $this->SecondarySalesRep = $SecondarySalesRep;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimarySalesRepFullName()
    {
        return $this->PrimarySalesRepFullName;
    }

    /**
     * @param string $PrimarySalesRepFullName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setPrimarySalesRepFullName($PrimarySalesRepFullName)
    {
        $this->PrimarySalesRepFullName = $PrimarySalesRepFullName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondarySalesRepFullName()
    {
        return $this->SecondarySalesRepFullName;
    }

    /**
     * @param string $SecondarySalesRepFullName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setSecondarySalesRepFullName($SecondarySalesRepFullName)
    {
        $this->SecondarySalesRepFullName = $SecondarySalesRepFullName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setCustomerPO($CustomerPO)
    {
        $this->CustomerPO = $CustomerPO;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalSalesTax()
    {
        return $this->TotalSalesTax;
    }

    /**
     * @param float $TotalSalesTax
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setTotalSalesTax($TotalSalesTax)
    {
        $this->TotalSalesTax = $TotalSalesTax;
        return $this;
    }

    /**
     * @return int
     */
    public function getApprovedById()
    {
        return $this->ApprovedById;
    }

    /**
     * @param int $ApprovedById
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setApprovedById($ApprovedById)
    {
        $this->ApprovedById = $ApprovedById;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getApprovedDate()
    {
        if ($this->ApprovedDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ApprovedDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ApprovedDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setApprovedDate(\DateTime $ApprovedDate)
    {
        $this->ApprovedDate = $ApprovedDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getRejectedById()
    {
        return $this->RejectedById;
    }

    /**
     * @param int $RejectedById
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setRejectedById($RejectedById)
    {
        $this->RejectedById = $RejectedById;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRejectedDate()
    {
        if ($this->RejectedDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->RejectedDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $RejectedDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setRejectedDate(\DateTime $RejectedDate)
    {
        $this->RejectedDate = $RejectedDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfNote
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param ArrayOfNote $Notes
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return ArrayOfOpportunityItem
     */
    public function getOpportunityItems()
    {
        return $this->OpportunityItems;
    }

    /**
     * @param ArrayOfOpportunityItem $OpportunityItems
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setOpportunityItems($OpportunityItems)
    {
        $this->OpportunityItems = $OpportunityItems;
        return $this;
    }

    /**
     * @return ArrayOfForecastDetail
     */
    public function getForecastDetails()
    {
        return $this->ForecastDetails;
    }

    /**
     * @param ArrayOfForecastDetail $ForecastDetails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setForecastDetails($ForecastDetails)
    {
        $this->ForecastDetails = $ForecastDetails;
        return $this;
    }

    /**
     * @return ArrayOfOpportunityCustomField
     */
    public function getOpportunityCustomFields()
    {
        return $this->OpportunityCustomFields;
    }

    /**
     * @param ArrayOfOpportunityCustomField $OpportunityCustomFields
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setOpportunityCustomFields($OpportunityCustomFields)
    {
        $this->OpportunityCustomFields = $OpportunityCustomFields;
        return $this;
    }

    /**
     * @return OpportunityTeam
     */
    public function getOpportunityTeam()
    {
        return $this->OpportunityTeam;
    }

    /**
     * @param OpportunityTeam $OpportunityTeam
     * @return \Spinen\ConnectWise\Library\Api\Generated\Opportunity
     */
    public function setOpportunityTeam(OpportunityTeam $OpportunityTeam)
    {
        $this->OpportunityTeam = $OpportunityTeam;
        return $this;
    }

}
