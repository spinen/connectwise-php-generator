<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $CompanyPhone
     */
    protected $CompanyPhone = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $OpportunityName
     */
    protected $OpportunityName = null;

    /**
     * @var string $Rating
     */
    protected $Rating = null;

    /**
     * @var string $StageName
     */
    protected $StageName = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var boolean $Closed
     */
    protected $Closed = null;

    /**
     * @var boolean $Won
     */
    protected $Won = null;

    /**
     * @var boolean $Lost
     */
    protected $Lost = null;

    /**
     * @var int $CloseProbability
     */
    protected $CloseProbability = null;

    /**
     * @var \DateTime $ExpectedCloseDate
     */
    protected $ExpectedCloseDate = null;

    /**
     * @var string $PrimarySalesRep
     */
    protected $PrimarySalesRep = null;

    /**
     * @var string $SecondarySalesRep
     */
    protected $SecondarySalesRep = null;

    /**
     * @var string $MarketingCampaignName
     */
    protected $MarketingCampaignName = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var int $Age
     */
    protected $Age = null;

    /**
     * @var float $EstimatedTotal
     */
    protected $EstimatedTotal = null;

    /**
     * @var float $RecurringTotal
     */
    protected $RecurringTotal = null;

    /**
     * @var float $WonAmount
     */
    protected $WonAmount = null;

    /**
     * @var float $LostAmount
     */
    protected $LostAmount = null;

    /**
     * @var float $OpenAmount
     */
    protected $OpenAmount = null;

    /**
     * @var float $Margin
     */
    protected $Margin = null;

    /**
     * @var float $AgreementAmount
     */
    protected $AgreementAmount = null;

    /**
     * @var float $ProductAmount
     */
    protected $ProductAmount = null;

    /**
     * @var float $ServiceAmount
     */
    protected $ServiceAmount = null;

    /**
     * @var float $Other1Amount
     */
    protected $Other1Amount = null;

    /**
     * @var float $Other2Amount
     */
    protected $Other2Amount = null;

    /**
     * @var string $CustomerPO
     */
    protected $CustomerPO = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;

    /**
     * @var ArrayOfOpportunityCustomField $OpportunityCustomFields
     */
    protected $OpportunityCustomFields = null;

    /**
     * @param int $Id
     * @param string $CompanyName
     * @param string $CompanyPhone
     * @param string $ContactName
     * @param string $OpportunityName
     * @param string $Rating
     * @param string $StageName
     * @param string $Type
     * @param string $Status
     * @param string $PrimarySalesRep
     * @param string $SecondarySalesRep
     * @param string $MarketingCampaignName
     * @param string $Location
     * @param string $BusinessUnit
     * @param string $CustomerPO
     * @param string $UpdatedBy
     * @param ArrayOfOpportunityCustomField $OpportunityCustomFields
     */
    public function __construct($Id = null, $CompanyName = null, $CompanyPhone = null, $ContactName = null, $OpportunityName = null, $Rating = null, $StageName = null, $Type = null, $Status = null, $PrimarySalesRep = null, $SecondarySalesRep = null, $MarketingCampaignName = null, $Location = null, $BusinessUnit = null, $CustomerPO = null, $UpdatedBy = null, $OpportunityCustomFields = null)
    {
        $this->Id                      = $Id;
        $this->CompanyName             = $CompanyName;
        $this->CompanyPhone            = $CompanyPhone;
        $this->ContactName             = $ContactName;
        $this->OpportunityName         = $OpportunityName;
        $this->Rating                  = $Rating;
        $this->StageName               = $StageName;
        $this->Type                    = $Type;
        $this->Status                  = $Status;
        $this->PrimarySalesRep         = $PrimarySalesRep;
        $this->SecondarySalesRep       = $SecondarySalesRep;
        $this->MarketingCampaignName   = $MarketingCampaignName;
        $this->Location                = $Location;
        $this->BusinessUnit            = $BusinessUnit;
        $this->CustomerPO              = $CustomerPO;
        $this->UpdatedBy               = $UpdatedBy;
        $this->OpportunityCustomFields = $OpportunityCustomFields;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyPhone()
    {
        return $this->CompanyPhone;
    }

    /**
     * @param string $CompanyPhone
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setCompanyPhone($CompanyPhone)
    {
        $this->CompanyPhone = $CompanyPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * @param string $ContactName
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setOpportunityName($OpportunityName)
    {
        $this->OpportunityName = $OpportunityName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setRating($Rating)
    {
        $this->Rating = $Rating;
        return $this;
    }

    /**
     * @return string
     */
    public function getStageName()
    {
        return $this->StageName;
    }

    /**
     * @param string $StageName
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setStageName($StageName)
    {
        $this->StageName = $StageName;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setType($Type)
    {
        $this->Type = $Type;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setClosed($Closed)
    {
        $this->Closed = $Closed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getWon()
    {
        return $this->Won;
    }

    /**
     * @param boolean $Won
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setWon($Won)
    {
        $this->Won = $Won;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLost()
    {
        return $this->Lost;
    }

    /**
     * @param boolean $Lost
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setLost($Lost)
    {
        $this->Lost = $Lost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setCloseProbability($CloseProbability)
    {
        $this->CloseProbability = $CloseProbability;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setExpectedCloseDate(\DateTime $ExpectedCloseDate)
    {
        $this->ExpectedCloseDate = $ExpectedCloseDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setSecondarySalesRep($SecondarySalesRep)
    {
        $this->SecondarySalesRep = $SecondarySalesRep;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarketingCampaignName()
    {
        return $this->MarketingCampaignName;
    }

    /**
     * @param string $MarketingCampaignName
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setMarketingCampaignName($MarketingCampaignName)
    {
        $this->MarketingCampaignName = $MarketingCampaignName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * @param int $Age
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setAge($Age)
    {
        $this->Age = $Age;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedTotal()
    {
        return $this->EstimatedTotal;
    }

    /**
     * @param float $EstimatedTotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setEstimatedTotal($EstimatedTotal)
    {
        $this->EstimatedTotal = $EstimatedTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getRecurringTotal()
    {
        return $this->RecurringTotal;
    }

    /**
     * @param float $RecurringTotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setRecurringTotal($RecurringTotal)
    {
        $this->RecurringTotal = $RecurringTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getWonAmount()
    {
        return $this->WonAmount;
    }

    /**
     * @param float $WonAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setWonAmount($WonAmount)
    {
        $this->WonAmount = $WonAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLostAmount()
    {
        return $this->LostAmount;
    }

    /**
     * @param float $LostAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setLostAmount($LostAmount)
    {
        $this->LostAmount = $LostAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpenAmount()
    {
        return $this->OpenAmount;
    }

    /**
     * @param float $OpenAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setOpenAmount($OpenAmount)
    {
        $this->OpenAmount = $OpenAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin()
    {
        return $this->Margin;
    }

    /**
     * @param float $Margin
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setMargin($Margin)
    {
        $this->Margin = $Margin;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setAgreementAmount($AgreementAmount)
    {
        $this->AgreementAmount = $AgreementAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductAmount()
    {
        return $this->ProductAmount;
    }

    /**
     * @param float $ProductAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setProductAmount($ProductAmount)
    {
        $this->ProductAmount = $ProductAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getServiceAmount()
    {
        return $this->ServiceAmount;
    }

    /**
     * @param float $ServiceAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setServiceAmount($ServiceAmount)
    {
        $this->ServiceAmount = $ServiceAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOther1Amount()
    {
        return $this->Other1Amount;
    }

    /**
     * @param float $Other1Amount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setOther1Amount($Other1Amount)
    {
        $this->Other1Amount = $Other1Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getOther2Amount()
    {
        return $this->Other2Amount;
    }

    /**
     * @param float $Other2Amount
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setOther2Amount($Other2Amount)
    {
        $this->Other2Amount = $Other2Amount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setCustomerPO($CustomerPO)
    {
        $this->CustomerPO = $CustomerPO;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setStatusId($StatusId)
    {
        $this->StatusId = $StatusId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setTypeId($TypeId)
    {
        $this->TypeId = $TypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityFindResult
     */
    public function setOpportunityCustomFields($OpportunityCustomFields)
    {
        $this->OpportunityCustomFields = $OpportunityCustomFields;
        return $this;
    }

}
