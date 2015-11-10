<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ServiceTicket extends TicketBase
{

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var \DateTime $DateReq
     */
    protected $DateReq = null;

    /**
     * @var \DateTime $DateReqUtc
     */
    protected $DateReqUtc = null;

    /**
     * @var float $SubBillingAmount
     */
    protected $SubBillingAmount = null;

    /**
     * @var \DateTime $SubDateAccepted
     */
    protected $SubDateAccepted = null;

    /**
     * @var \DateTime $SubDateAcceptedUtc
     */
    protected $SubDateAcceptedUtc = null;

    /**
     * @var boolean $CustomerUpdatedFlag
     */
    protected $CustomerUpdatedFlag = null;

    /**
     * @var string $ContactPhoneNumber
     */
    protected $ContactPhoneNumber = null;

    /**
     * @var string $ContactPhoneExtension
     */
    protected $ContactPhoneExtension = null;

    /**
     * @var string $ContactEmailAddress
     */
    protected $ContactEmailAddress = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $ServiceTeamId
     */
    protected $ServiceTeamId = null;

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
     * @var int $ResolveMinutes
     */
    protected $ResolveMinutes = null;

    /**
     * @var int $ResPlanMinutes
     */
    protected $ResPlanMinutes = null;

    /**
     * @var int $RespondMinutes
     */
    protected $RespondMinutes = null;

    /**
     * @var string $NewTicketContactEmailLookup
     */
    protected $NewTicketContactEmailLookup = null;

    /**
     * @var string $ExternalXRef
     */
    protected $ExternalXRef = null;

    /**
     * @var SrBillingMethod $SubBillingMethod
     */
    protected $SubBillingMethod = null;

    /**
     * @var boolean $ProcessNotifications
     */
    protected $ProcessNotifications = null;

    /**
     * @var ArrayOfTicketConfiguration $Configurations
     */
    protected $Configurations = null;

    /**
     * @var ArrayOfTicketNote $DetailNotes
     */
    protected $DetailNotes = null;

    /**
     * @var ArrayOfTicketNote $InternalAnalysisNotes
     */
    protected $InternalAnalysisNotes = null;

    /**
     * @var ArrayOfTicketNote $ResolutionNotes
     */
    protected $ResolutionNotes = null;

    /**
     * @var ArrayOfTicketTask $TaskItems
     */
    protected $TaskItems = null;

    /**
     * @var ArrayOfDocumentInfo $Documents
     */
    protected $Documents = null;

    /**
     * @var boolean $SkipCallback
     */
    protected $SkipCallback = null;

    /**
     * @var int $PortalTypeId
     */
    protected $PortalTypeId = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

    /**
     * @var boolean $IsInSla
     */
    protected $IsInSla = null;

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
     * @param string $CompanyIdentifier
     * @param int $Id
     * @param \DateTime $DateReq
     * @param \DateTime $DateReqUtc
     * @param float $SubBillingAmount
     * @param \DateTime $SubDateAccepted
     * @param \DateTime $SubDateAcceptedUtc
     * @param boolean $CustomerUpdatedFlag
     * @param string $ContactPhoneNumber
     * @param string $ContactPhoneExtension
     * @param string $ContactEmailAddress
     * @param string $Severity
     * @param string $Impact
     * @param string $NewTicketContactEmailLookup
     * @param string $ExternalXRef
     * @param SrBillingMethod $SubBillingMethod
     * @param boolean $ProcessNotifications
     * @param ArrayOfTicketConfiguration $Configurations
     * @param ArrayOfTicketNote $DetailNotes
     * @param ArrayOfTicketNote $InternalAnalysisNotes
     * @param ArrayOfTicketNote $ResolutionNotes
     * @param ArrayOfTicketTask $TaskItems
     * @param ArrayOfDocumentInfo $Documents
     * @param boolean $SkipCallback
     * @param int $PortalTypeId
     * @param string $PoNumber
     */
    public function __construct($CompanyName = null, $ContactName = null, $AddressLine1 = null, $AddressLine2 = null, $City = null, $StateIdentifier = null, $Zip = null, $Country = null, $Board = null, $TicketStatus = null, $StatusName = null, $ClosedFlag = null, $Type = null, $ServiceType = null, $ServiceSubType = null, $ServiceItem = null, $Priority = null, $Location = null, $Source = null, $Summary = null, $DetailDescription = null, $InternalDescription = null, $ResolutionDescription = null, $SiteName = null, $Approved = null, $ClosedBy = null, $UpdatedBy = null, $EmergencyFlag = null, $EnteredBy = null, $RecordType = null, $CompanyIdentifier = null, $Id = null, \DateTime $DateReq = null, \DateTime $DateReqUtc = null, $SubBillingAmount = null, \DateTime $SubDateAccepted = null, \DateTime $SubDateAcceptedUtc = null, $CustomerUpdatedFlag = null, $ContactPhoneNumber = null, $ContactPhoneExtension = null, $ContactEmailAddress = null, $Severity = null, $Impact = null, $NewTicketContactEmailLookup = null, $ExternalXRef = null, SrBillingMethod $SubBillingMethod = null, $ProcessNotifications = null, $Configurations = null, $DetailNotes = null, $InternalAnalysisNotes = null, $ResolutionNotes = null, $TaskItems = null, $Documents = null, $SkipCallback = null, $PortalTypeId = null, $PoNumber = null)
    {
        parent::__construct($CompanyName, $ContactName, $AddressLine1, $AddressLine2, $City, $StateIdentifier, $Zip, $Country, $Board, $TicketStatus, $StatusName, $ClosedFlag, $Type, $ServiceType, $ServiceSubType, $ServiceItem, $Priority, $Location, $Source, $Summary, $DetailDescription, $InternalDescription, $ResolutionDescription, $SiteName, $Approved, $ClosedBy, $UpdatedBy, $EmergencyFlag, $EnteredBy, $RecordType);
        $this->CompanyIdentifier           = $CompanyIdentifier;
        $this->Id                          = $Id;
        $this->DateReq                     = $DateReq ? $DateReq->format(\DateTime::ATOM) : null;
        $this->DateReqUtc                  = $DateReqUtc ? $DateReqUtc->format(\DateTime::ATOM) : null;
        $this->SubBillingAmount            = $SubBillingAmount;
        $this->SubDateAccepted             = $SubDateAccepted ? $SubDateAccepted->format(\DateTime::ATOM) : null;
        $this->SubDateAcceptedUtc          = $SubDateAcceptedUtc ? $SubDateAcceptedUtc->format(\DateTime::ATOM) : null;
        $this->CustomerUpdatedFlag         = $CustomerUpdatedFlag;
        $this->ContactPhoneNumber          = $ContactPhoneNumber;
        $this->ContactPhoneExtension       = $ContactPhoneExtension;
        $this->ContactEmailAddress         = $ContactEmailAddress;
        $this->Severity                    = $Severity;
        $this->Impact                      = $Impact;
        $this->NewTicketContactEmailLookup = $NewTicketContactEmailLookup;
        $this->ExternalXRef                = $ExternalXRef;
        $this->SubBillingMethod            = $SubBillingMethod;
        $this->ProcessNotifications        = $ProcessNotifications;
        $this->Configurations              = $Configurations;
        $this->DetailNotes                 = $DetailNotes;
        $this->InternalAnalysisNotes       = $InternalAnalysisNotes;
        $this->ResolutionNotes             = $ResolutionNotes;
        $this->TaskItems                   = $TaskItems;
        $this->Documents                   = $Documents;
        $this->SkipCallback                = $SkipCallback;
        $this->PortalTypeId                = $PortalTypeId;
        $this->PoNumber                    = $PoNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateReq()
    {
        if ($this->DateReq == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateReq);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateReq
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDateReq(\DateTime $DateReq)
    {
        $this->DateReq = $DateReq->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateReqUtc()
    {
        if ($this->DateReqUtc == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateReqUtc);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateReqUtc
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDateReqUtc(\DateTime $DateReqUtc)
    {
        $this->DateReqUtc = $DateReqUtc->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getSubBillingAmount()
    {
        return $this->SubBillingAmount;
    }

    /**
     * @param float $SubBillingAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setSubBillingAmount($SubBillingAmount)
    {
        $this->SubBillingAmount = $SubBillingAmount;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubDateAccepted()
    {
        if ($this->SubDateAccepted == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SubDateAccepted);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SubDateAccepted
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setSubDateAccepted(\DateTime $SubDateAccepted)
    {
        $this->SubDateAccepted = $SubDateAccepted->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSubDateAcceptedUtc()
    {
        if ($this->SubDateAcceptedUtc == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->SubDateAcceptedUtc);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $SubDateAcceptedUtc
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setSubDateAcceptedUtc(\DateTime $SubDateAcceptedUtc)
    {
        $this->SubDateAcceptedUtc = $SubDateAcceptedUtc->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomerUpdatedFlag()
    {
        return $this->CustomerUpdatedFlag;
    }

    /**
     * @param boolean $CustomerUpdatedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setCustomerUpdatedFlag($CustomerUpdatedFlag)
    {
        $this->CustomerUpdatedFlag = $CustomerUpdatedFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setContactPhoneNumber($ContactPhoneNumber)
    {
        $this->ContactPhoneNumber = $ContactPhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhoneExtension()
    {
        return $this->ContactPhoneExtension;
    }

    /**
     * @param string $ContactPhoneExtension
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setContactPhoneExtension($ContactPhoneExtension)
    {
        $this->ContactPhoneExtension = $ContactPhoneExtension;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setContactEmailAddress($ContactEmailAddress)
    {
        $this->ContactEmailAddress = $ContactEmailAddress;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceTeamId()
    {
        return $this->ServiceTeamId;
    }

    /**
     * @param int $ServiceTeamId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setServiceTeamId($ServiceTeamId)
    {
        $this->ServiceTeamId = $ServiceTeamId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDateResolvedUTC(\DateTime $DateResolvedUTC)
    {
        $this->DateResolvedUTC = $DateResolvedUTC->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDateResplanUTC(\DateTime $DateResplanUTC)
    {
        $this->DateResplanUTC = $DateResplanUTC->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDateRespondedUTC(\DateTime $DateRespondedUTC)
    {
        $this->DateRespondedUTC = $DateRespondedUTC->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getResolveMinutes()
    {
        return $this->ResolveMinutes;
    }

    /**
     * @param int $ResolveMinutes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setResolveMinutes($ResolveMinutes)
    {
        $this->ResolveMinutes = $ResolveMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getResPlanMinutes()
    {
        return $this->ResPlanMinutes;
    }

    /**
     * @param int $ResPlanMinutes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setResPlanMinutes($ResPlanMinutes)
    {
        $this->ResPlanMinutes = $ResPlanMinutes;
        return $this;
    }

    /**
     * @return int
     */
    public function getRespondMinutes()
    {
        return $this->RespondMinutes;
    }

    /**
     * @param int $RespondMinutes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setRespondMinutes($RespondMinutes)
    {
        $this->RespondMinutes = $RespondMinutes;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewTicketContactEmailLookup()
    {
        return $this->NewTicketContactEmailLookup;
    }

    /**
     * @param string $NewTicketContactEmailLookup
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setNewTicketContactEmailLookup($NewTicketContactEmailLookup)
    {
        $this->NewTicketContactEmailLookup = $NewTicketContactEmailLookup;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalXRef()
    {
        return $this->ExternalXRef;
    }

    /**
     * @param string $ExternalXRef
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setExternalXRef($ExternalXRef)
    {
        $this->ExternalXRef = $ExternalXRef;
        return $this;
    }

    /**
     * @return SrBillingMethod
     */
    public function getSubBillingMethod()
    {
        return $this->SubBillingMethod;
    }

    /**
     * @param SrBillingMethod $SubBillingMethod
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setSubBillingMethod(SrBillingMethod $SubBillingMethod)
    {
        $this->SubBillingMethod = $SubBillingMethod;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getProcessNotifications()
    {
        return $this->ProcessNotifications;
    }

    /**
     * @param boolean $ProcessNotifications
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setProcessNotifications($ProcessNotifications)
    {
        $this->ProcessNotifications = $ProcessNotifications;
        return $this;
    }

    /**
     * @return ArrayOfTicketConfiguration
     */
    public function getConfigurations()
    {
        return $this->Configurations;
    }

    /**
     * @param ArrayOfTicketConfiguration $Configurations
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setConfigurations($Configurations)
    {
        $this->Configurations = $Configurations;
        return $this;
    }

    /**
     * @return ArrayOfTicketNote
     */
    public function getDetailNotes()
    {
        return $this->DetailNotes;
    }

    /**
     * @param ArrayOfTicketNote $DetailNotes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDetailNotes($DetailNotes)
    {
        $this->DetailNotes = $DetailNotes;
        return $this;
    }

    /**
     * @return ArrayOfTicketNote
     */
    public function getInternalAnalysisNotes()
    {
        return $this->InternalAnalysisNotes;
    }

    /**
     * @param ArrayOfTicketNote $InternalAnalysisNotes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setInternalAnalysisNotes($InternalAnalysisNotes)
    {
        $this->InternalAnalysisNotes = $InternalAnalysisNotes;
        return $this;
    }

    /**
     * @return ArrayOfTicketNote
     */
    public function getResolutionNotes()
    {
        return $this->ResolutionNotes;
    }

    /**
     * @param ArrayOfTicketNote $ResolutionNotes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setResolutionNotes($ResolutionNotes)
    {
        $this->ResolutionNotes = $ResolutionNotes;
        return $this;
    }

    /**
     * @return ArrayOfTicketTask
     */
    public function getTaskItems()
    {
        return $this->TaskItems;
    }

    /**
     * @param ArrayOfTicketTask $TaskItems
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setTaskItems($TaskItems)
    {
        $this->TaskItems = $TaskItems;
        return $this;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * @param ArrayOfDocumentInfo $Documents
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setDocuments($Documents)
    {
        $this->Documents = $Documents;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipCallback()
    {
        return $this->SkipCallback;
    }

    /**
     * @param boolean $SkipCallback
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setSkipCallback($SkipCallback)
    {
        $this->SkipCallback = $SkipCallback;
        return $this;
    }

    /**
     * @return int
     */
    public function getPortalTypeId()
    {
        return $this->PortalTypeId;
    }

    /**
     * @param int $PortalTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setPortalTypeId($PortalTypeId)
    {
        $this->PortalTypeId = $PortalTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setPoNumber($PoNumber)
    {
        $this->PoNumber = $PoNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ServiceTicket
     */
    public function setIsInSla($IsInSla)
    {
        $this->IsInSla = $IsInSla;
        return $this;
    }

}
