<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TicketBase
{

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

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
     * @var string $Board
     */
    protected $Board = null;

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
     * @var string $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var string $ServiceSubType
     */
    protected $ServiceSubType = null;

    /**
     * @var string $ServiceItem
     */
    protected $ServiceItem = null;

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
     * @var string $DetailDescription
     */
    protected $DetailDescription = null;

    /**
     * @var string $InternalDescription
     */
    protected $InternalDescription = null;

    /**
     * @var string $ResolutionDescription
     */
    protected $ResolutionDescription = null;

    /**
     * @var \DateTime $EnteredDate
     */
    protected $EnteredDate = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var \DateTime $RequiredDate
     */
    protected $RequiredDate = null;

    /**
     * @var \DateTime $ClosedDate
     */
    protected $ClosedDate = null;

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
     * @var int $BoardId
     */
    protected $BoardId = null;

    /**
     * @var string $ClosedBy
     */
    protected $ClosedBy = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var boolean $EmergencyFlag
     */
    protected $EmergencyFlag = null;

    /**
     * @var string $EnteredBy
     */
    protected $EnteredBy = null;

    /**
     * @var string $RecordType
     */
    protected $RecordType = null;

    /**
     * @param string $CompanyName
     * @param string $ContactName
     * @param string $AddressLine1
     * @param string $AddressLine2
     * @param string $City
     * @param string $StateIdentifier
     * @param string $Zip
     * @param string $Country
     * @param string $Board
     * @param string $TicketStatus
     * @param string $StatusName
     * @param boolean $ClosedFlag
     * @param string $Type
     * @param string $ServiceType
     * @param string $ServiceSubType
     * @param string $ServiceItem
     * @param string $Priority
     * @param string $Location
     * @param string $Source
     * @param string $Summary
     * @param string $DetailDescription
     * @param string $InternalDescription
     * @param string $ResolutionDescription
     * @param string $SiteName
     * @param boolean $Approved
     * @param string $ClosedBy
     * @param string $UpdatedBy
     * @param boolean $EmergencyFlag
     * @param string $EnteredBy
     * @param string $RecordType
     */
    public function __construct($CompanyName = null, $ContactName = null, $AddressLine1 = null, $AddressLine2 = null, $City = null, $StateIdentifier = null, $Zip = null, $Country = null, $Board = null, $TicketStatus = null, $StatusName = null, $ClosedFlag = null, $Type = null, $ServiceType = null, $ServiceSubType = null, $ServiceItem = null, $Priority = null, $Location = null, $Source = null, $Summary = null, $DetailDescription = null, $InternalDescription = null, $ResolutionDescription = null, $SiteName = null, $Approved = null, $ClosedBy = null, $UpdatedBy = null, $EmergencyFlag = null, $EnteredBy = null, $RecordType = null)
    {
        $this->CompanyName           = $CompanyName;
        $this->ContactName           = $ContactName;
        $this->AddressLine1          = $AddressLine1;
        $this->AddressLine2          = $AddressLine2;
        $this->City                  = $City;
        $this->StateIdentifier       = $StateIdentifier;
        $this->Zip                   = $Zip;
        $this->Country               = $Country;
        $this->Board                 = $Board;
        $this->TicketStatus          = $TicketStatus;
        $this->StatusName            = $StatusName;
        $this->ClosedFlag            = $ClosedFlag;
        $this->Type                  = $Type;
        $this->ServiceType           = $ServiceType;
        $this->ServiceSubType        = $ServiceSubType;
        $this->ServiceItem           = $ServiceItem;
        $this->Priority              = $Priority;
        $this->Location              = $Location;
        $this->Source                = $Source;
        $this->Summary               = $Summary;
        $this->DetailDescription     = $DetailDescription;
        $this->InternalDescription   = $InternalDescription;
        $this->ResolutionDescription = $ResolutionDescription;
        $this->SiteName              = $SiteName;
        $this->Approved              = $Approved;
        $this->ClosedBy              = $ClosedBy;
        $this->UpdatedBy             = $UpdatedBy;
        $this->EmergencyFlag         = $EmergencyFlag;
        $this->EnteredBy             = $EnteredBy;
        $this->RecordType            = $RecordType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

    /**
     * @return string
     */
    public function getBoard()
    {
        return $this->Board;
    }

    /**
     * @param string $Board
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setBoard($Board)
    {
        $this->Board = $Board;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setServiceType($ServiceType)
    {
        $this->ServiceType = $ServiceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceSubType()
    {
        return $this->ServiceSubType;
    }

    /**
     * @param string $ServiceSubType
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setServiceSubType($ServiceSubType)
    {
        $this->ServiceSubType = $ServiceSubType;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceItem()
    {
        return $this->ServiceItem;
    }

    /**
     * @param string $ServiceItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setServiceItem($ServiceItem)
    {
        $this->ServiceItem = $ServiceItem;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setSummary($Summary)
    {
        $this->Summary = $Summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetailDescription()
    {
        return $this->DetailDescription;
    }

    /**
     * @param string $DetailDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setDetailDescription($DetailDescription)
    {
        $this->DetailDescription = $DetailDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalDescription()
    {
        return $this->InternalDescription;
    }

    /**
     * @param string $InternalDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setInternalDescription($InternalDescription)
    {
        $this->InternalDescription = $InternalDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getResolutionDescription()
    {
        return $this->ResolutionDescription;
    }

    /**
     * @param string $ResolutionDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setResolutionDescription($ResolutionDescription)
    {
        $this->ResolutionDescription = $ResolutionDescription;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEnteredDate()
    {
        if ($this->EnteredDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EnteredDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EnteredDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setEnteredDate(\DateTime $EnteredDate)
    {
        $this->EnteredDate = $EnteredDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setRequiredDate(\DateTime $RequiredDate)
    {
        $this->RequiredDate = $RequiredDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosedDate()
    {
        if ($this->ClosedDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ClosedDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ClosedDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setClosedDate(\DateTime $ClosedDate)
    {
        $this->ClosedDate = $ClosedDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setApproved($Approved)
    {
        $this->Approved = $Approved;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setBoardId($BoardId)
    {
        $this->BoardId = $BoardId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setClosedBy($ClosedBy)
    {
        $this->ClosedBy = $ClosedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getEmergencyFlag()
    {
        return $this->EmergencyFlag;
    }

    /**
     * @param boolean $EmergencyFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setEmergencyFlag($EmergencyFlag)
    {
        $this->EmergencyFlag = $EmergencyFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setEnteredBy($EnteredBy)
    {
        $this->EnteredBy = $EnteredBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketBase
     */
    public function setRecordType($RecordType)
    {
        $this->RecordType = $RecordType;
        return $this;
    }

}
