<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TicketFindResult
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
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $AddressLine1
     */
    protected $AddressLine1 = null;

    /**
     * @var string $AddressLine2
     */
    protected $AddressLine2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $StateIdentifier
     */
    protected $StateIdentifier = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $BoardName
     */
    protected $BoardName = null;

    /**
     * @var int $BoardId
     */
    protected $BoardId = null;

    /**
     * @var string $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var string $StatusName
     */
    protected $StatusName = null;

    /**
     * @var boolean $ClosedFlag
     */
    protected $ClosedFlag = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $SubType
     */
    protected $SubType = null;

    /**
     * @var string $SubTypeItem
     */
    protected $SubTypeItem = null;

    /**
     * @var string $Priority
     */
    protected $Priority = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $Summary
     */
    protected $Summary = null;

    /**
     * @var \DateTime $EnteredDateUTC
     */
    protected $EnteredDateUTC = null;

    /**
     * @var \DateTime $LastUpdatedUTC
     */
    protected $LastUpdatedUTC = null;

    /**
     * @var string $Resources
     */
    protected $Resources = null;

    /**
     * @var \DateTime $RequiredDateUTC
     */
    protected $RequiredDateUTC = null;

    /**
     * @var \DateTime $ClosedDateUTC
     */
    protected $ClosedDateUTC = null;

    /**
     * @var string $SiteName
     */
    protected $SiteName = null;

    /**
     * @var float $BudgetHours
     */
    protected $BudgetHours = null;

    /**
     * @var float $ActualHours
     */
    protected $ActualHours = null;

    /**
     * @var boolean $Approved
     */
    protected $Approved = null;

    /**
     * @var string $ClosedBy
     */
    protected $ClosedBy = null;

    /**
     * @var int $ResolveMins
     */
    protected $ResolveMins = null;

    /**
     * @var int $ResPlanMins
     */
    protected $ResPlanMins = null;

    /**
     * @var int $RespondMins
     */
    protected $RespondMins = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var string $RecordType
     */
    protected $RecordType = null;

    /**
     * @var int $TeamId
     */
    protected $TeamId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var string $Severity
     */
    protected $Severity = null;

    /**
     * @var string $Impact
     */
    protected $Impact = null;

    /**
     * @var \DateTime $DateResolvedUTC
     */
    protected $DateResolvedUTC = null;

    /**
     * @var \DateTime $DateResplanUTC
     */
    protected $DateResplanUTC = null;

    /**
     * @var \DateTime $DateRespondedUTC
     */
    protected $DateRespondedUTC = null;

    /**
     * @var string $ContactEmailAddress
     */
    protected $ContactEmailAddress = null;

    /**
     * @var string $ContactPhoneNumber
     */
    protected $ContactPhoneNumber = null;

    /**
     * @var boolean $IsInSla
     */
    protected $IsInSla = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->AddressLine1;
    }

    /**
     * @param string $AddressLine1
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setAddressLine1($AddressLine1)
    {
        $this->AddressLine1 = $AddressLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->AddressLine2;
    }

    /**
     * @param string $AddressLine2
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setAddressLine2($AddressLine2)
    {
        $this->AddressLine2 = $AddressLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateIdentifier()
    {
        return $this->StateIdentifier;
    }

    /**
     * @param string $StateIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setStateIdentifier($StateIdentifier)
    {
        $this->StateIdentifier = $StateIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setZip($Zip)
    {
        $this->Zip = $Zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoardName()
    {
        return $this->BoardName;
    }

    /**
     * @param string $BoardName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setBoardName($BoardName)
    {
        $this->BoardName = $BoardName;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoardId()
    {
        return $this->BoardId;
    }

    /**
     * @param int $BoardId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setBoardId($BoardId)
    {
        $this->BoardId = $BoardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTicketStatus()
    {
        return $this->TicketStatus;
    }

    /**
     * @param string $TicketStatus
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setTicketStatus($TicketStatus)
    {
        $this->TicketStatus = $TicketStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusName()
    {
        return $this->StatusName;
    }

    /**
     * @param string $StatusName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setStatusName($StatusName)
    {
        $this->StatusName = $StatusName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosedFlag()
    {
        return $this->ClosedFlag;
    }

    /**
     * @param boolean $ClosedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setClosedFlag($ClosedFlag)
    {
        $this->ClosedFlag = $ClosedFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubType()
    {
        return $this->SubType;
    }

    /**
     * @param string $SubType
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setSubType($SubType)
    {
        $this->SubType = $SubType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubTypeItem()
    {
        return $this->SubTypeItem;
    }

    /**
     * @param string $SubTypeItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setSubTypeItem($SubTypeItem)
    {
        $this->SubTypeItem = $SubTypeItem;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * @param string $Priority
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setPriority($Priority)
    {
        $this->Priority = $Priority;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setSource($Source)
    {
        $this->Source = $Source;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setSummary($Summary)
    {
        $this->Summary = $Summary;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnteredDateUTC()
    {
        if ($this->EnteredDateUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EnteredDateUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EnteredDateUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setEnteredDateUTC(\DateTime $EnteredDateUTC = null)
    {
        if ($EnteredDateUTC == null) {
            $this->EnteredDateUTC = null;
        } else {
            $this->EnteredDateUTC = $EnteredDateUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdatedUTC()
    {
        if ($this->LastUpdatedUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdatedUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdatedUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setLastUpdatedUTC(\DateTime $LastUpdatedUTC = null)
    {
        if ($LastUpdatedUTC == null) {
            $this->LastUpdatedUTC = null;
        } else {
            $this->LastUpdatedUTC = $LastUpdatedUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getResources()
    {
        return $this->Resources;
    }

    /**
     * @param string $Resources
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setResources($Resources)
    {
        $this->Resources = $Resources;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRequiredDateUTC()
    {
        if ($this->RequiredDateUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->RequiredDateUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $RequiredDateUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setRequiredDateUTC(\DateTime $RequiredDateUTC = null)
    {
        if ($RequiredDateUTC == null) {
            $this->RequiredDateUTC = null;
        } else {
            $this->RequiredDateUTC = $RequiredDateUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedDateUTC()
    {
        if ($this->ClosedDateUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ClosedDateUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ClosedDateUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setClosedDateUTC(\DateTime $ClosedDateUTC = null)
    {
        if ($ClosedDateUTC == null) {
            $this->ClosedDateUTC = null;
        } else {
            $this->ClosedDateUTC = $ClosedDateUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param string $SiteName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setSiteName($SiteName)
    {
        $this->SiteName = $SiteName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setBudgetHours($BudgetHours)
    {
        $this->BudgetHours = $BudgetHours;
        return $this;
    }

    /**
     * @return float
     */
    public function getActualHours()
    {
        return $this->ActualHours;
    }

    /**
     * @param float $ActualHours
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setActualHours($ActualHours)
    {
        $this->ActualHours = $ActualHours;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getApproved()
    {
        return $this->Approved;
    }

    /**
     * @param boolean $Approved
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setApproved($Approved)
    {
        $this->Approved = $Approved;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setClosedBy($ClosedBy)
    {
        $this->ClosedBy = $ClosedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getResolveMins()
    {
        return $this->ResolveMins;
    }

    /**
     * @param int $ResolveMins
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setResolveMins($ResolveMins)
    {
        $this->ResolveMins = $ResolveMins;
        return $this;
    }

    /**
     * @return int
     */
    public function getResPlanMins()
    {
        return $this->ResPlanMins;
    }

    /**
     * @param int $ResPlanMins
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setResPlanMins($ResPlanMins)
    {
        $this->ResPlanMins = $ResPlanMins;
        return $this;
    }

    /**
     * @return int
     */
    public function getRespondMins()
    {
        return $this->RespondMins;
    }

    /**
     * @param int $RespondMins
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setRespondMins($RespondMins)
    {
        $this->RespondMins = $RespondMins;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordType()
    {
        return $this->RecordType;
    }

    /**
     * @param string $RecordType
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setRecordType($RecordType)
    {
        $this->RecordType = $RecordType;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->TeamId;
    }

    /**
     * @param int $TeamId
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setTeamId($TeamId)
    {
        $this->TeamId = $TeamId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSeverity()
    {
        return $this->Severity;
    }

    /**
     * @param string $Severity
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setSeverity($Severity)
    {
        $this->Severity = $Severity;
        return $this;
    }

    /**
     * @return string
     */
    public function getImpact()
    {
        return $this->Impact;
    }

    /**
     * @param string $Impact
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setImpact($Impact)
    {
        $this->Impact = $Impact;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateResolvedUTC()
    {
        if ($this->DateResolvedUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateResolvedUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateResolvedUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setDateResolvedUTC(\DateTime $DateResolvedUTC = null)
    {
        if ($DateResolvedUTC == null) {
            $this->DateResolvedUTC = null;
        } else {
            $this->DateResolvedUTC = $DateResolvedUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateResplanUTC()
    {
        if ($this->DateResplanUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateResplanUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateResplanUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setDateResplanUTC(\DateTime $DateResplanUTC = null)
    {
        if ($DateResplanUTC == null) {
            $this->DateResplanUTC = null;
        } else {
            $this->DateResplanUTC = $DateResplanUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateRespondedUTC()
    {
        if ($this->DateRespondedUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateRespondedUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateRespondedUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setDateRespondedUTC(\DateTime $DateRespondedUTC = null)
    {
        if ($DateRespondedUTC == null) {
            $this->DateRespondedUTC = null;
        } else {
            $this->DateRespondedUTC = $DateRespondedUTC->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmailAddress()
    {
        return $this->ContactEmailAddress;
    }

    /**
     * @param string $ContactEmailAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setContactEmailAddress($ContactEmailAddress)
    {
        $this->ContactEmailAddress = $ContactEmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhoneNumber()
    {
        return $this->ContactPhoneNumber;
    }

    /**
     * @param string $ContactPhoneNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setContactPhoneNumber($ContactPhoneNumber)
    {
        $this->ContactPhoneNumber = $ContactPhoneNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInSla()
    {
        return $this->IsInSla;
    }

    /**
     * @param boolean $IsInSla
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setIsInSla($IsInSla)
    {
        $this->IsInSla = $IsInSla;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketFindResult
     */
    public function setStatusId($StatusId)
    {
        $this->StatusId = $StatusId;
        return $this;
    }

}
