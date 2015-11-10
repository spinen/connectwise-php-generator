<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectTicketFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Summary
     */
    protected $Summary = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var int $PhaseId
     */
    protected $PhaseId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var string $SiteNameIdentifier
     */
    protected $SiteNameIdentifier = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var int $ServiceTypeId
     */
    protected $ServiceTypeId = null;

    /**
     * @var int $ServiceSubTypeId
     */
    protected $ServiceSubTypeId = null;

    /**
     * @var int $ServiceItemId
     */
    protected $ServiceItemId = null;

    /**
     * @var int $SourceId
     */
    protected $SourceId = null;

    /**
     * @var int $ServiceLocationId
     */
    protected $ServiceLocationId = null;

    /**
     * @var int $PriorityId
     */
    protected $PriorityId = null;

    /**
     * @var \DateTime $RequiredDate
     */
    protected $RequiredDate = null;

    /**
     * @var string $AssignedResources
     */
    protected $AssignedResources = null;

    /**
     * @var string $RecType
     */
    protected $RecType = null;

    /**
     * @var string $WbsCode
     */
    protected $WbsCode = null;

    /**
     * @var float $BudgetHours
     */
    protected $BudgetHours = null;

    /**
     * @param int $Id
     * @param string $Summary
     * @param string $SiteNameIdentifier
     * @param string $Status
     * @param string $AssignedResources
     * @param string $RecType
     * @param string $WbsCode
     */
    public function __construct($Id = null, $Summary = null, $SiteNameIdentifier = null, $Status = null, $AssignedResources = null, $RecType = null, $WbsCode = null)
    {
        $this->Id                 = $Id;
        $this->Summary            = $Summary;
        $this->SiteNameIdentifier = $SiteNameIdentifier;
        $this->Status             = $Status;
        $this->AssignedResources  = $AssignedResources;
        $this->RecType            = $RecType;
        $this->WbsCode            = $WbsCode;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->Summary;
    }

    /**
     * @param string $Summary
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setSummary($Summary)
    {
        $this->Summary = $Summary;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhaseId()
    {
        return $this->PhaseId;
    }

    /**
     * @param int $PhaseId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setPhaseId($PhaseId)
    {
        $this->PhaseId = $PhaseId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteNameIdentifier()
    {
        return $this->SiteNameIdentifier;
    }

    /**
     * @param string $SiteNameIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setSiteNameIdentifier($SiteNameIdentifier)
    {
        $this->SiteNameIdentifier = $SiteNameIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceTypeId()
    {
        return $this->ServiceTypeId;
    }

    /**
     * @param int $ServiceTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setServiceTypeId($ServiceTypeId)
    {
        $this->ServiceTypeId = $ServiceTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceSubTypeId()
    {
        return $this->ServiceSubTypeId;
    }

    /**
     * @param int $ServiceSubTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setServiceSubTypeId($ServiceSubTypeId)
    {
        $this->ServiceSubTypeId = $ServiceSubTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceItemId()
    {
        return $this->ServiceItemId;
    }

    /**
     * @param int $ServiceItemId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setServiceItemId($ServiceItemId)
    {
        $this->ServiceItemId = $ServiceItemId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }

    /**
     * @param int $SourceId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setSourceId($SourceId)
    {
        $this->SourceId = $SourceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceLocationId()
    {
        return $this->ServiceLocationId;
    }

    /**
     * @param int $ServiceLocationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setServiceLocationId($ServiceLocationId)
    {
        $this->ServiceLocationId = $ServiceLocationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriorityId()
    {
        return $this->PriorityId;
    }

    /**
     * @param int $PriorityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setPriorityId($PriorityId)
    {
        $this->PriorityId = $PriorityId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequiredDate()
    {
        if ($this->RequiredDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->RequiredDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $RequiredDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setRequiredDate(\DateTime $RequiredDate)
    {
        $this->RequiredDate = $RequiredDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignedResources()
    {
        return $this->AssignedResources;
    }

    /**
     * @param string $AssignedResources
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setAssignedResources($AssignedResources)
    {
        $this->AssignedResources = $AssignedResources;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecType()
    {
        return $this->RecType;
    }

    /**
     * @param string $RecType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setRecType($RecType)
    {
        $this->RecType = $RecType;
        return $this;
    }

    /**
     * @return string
     */
    public function getWbsCode()
    {
        return $this->WbsCode;
    }

    /**
     * @param string $WbsCode
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setWbsCode($WbsCode)
    {
        $this->WbsCode = $WbsCode;
        return $this;
    }

    /**
     * @return float
     */
    public function getBudgetHours()
    {
        return $this->BudgetHours;
    }

    /**
     * @param float $BudgetHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTicketFindResult
     */
    public function setBudgetHours($BudgetHours)
    {
        $this->BudgetHours = $BudgetHours;
        return $this;
    }

}
