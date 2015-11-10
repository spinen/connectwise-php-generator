<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Contact
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var boolean $Inactive
     */
    protected $Inactive = null;

    /**
     * @var string $SID
     */
    protected $SID = null;

    /**
     * @var int $ManagerId
     */
    protected $ManagerId = null;

    /**
     * @var int $AssistantId
     */
    protected $AssistantId = null;

    /**
     * @var string $Relationship
     */
    protected $Relationship = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $PhoneExt
     */
    protected $PhoneExt = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $FaxExt
     */
    protected $FaxExt = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $School
     */
    protected $School = null;

    /**
     * @var string $NickName
     */
    protected $NickName = null;

    /**
     * @var boolean $Married
     */
    protected $Married = null;

    /**
     * @var boolean $Children
     */
    protected $Children = null;

    /**
     * @var string $SignificantOther
     */
    protected $SignificantOther = null;

    /**
     * @var string $PortalPassword
     */
    protected $PortalPassword = null;

    /**
     * @var int $PortalSecurityLevel
     */
    protected $PortalSecurityLevel = null;

    /**
     * @var boolean $DisablePortalLogin
     */
    protected $DisablePortalLogin = null;

    /**
     * @var boolean $UnsubscribeFlag
     */
    protected $UnsubscribeFlag = null;

    /**
     * @var boolean $PersonalAddressFlag
     */
    protected $PersonalAddressFlag = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var ApiGender $Gender
     */
    protected $Gender = null;

    /**
     * @var Address $PersonalAddress
     */
    protected $PersonalAddress = null;

    /**
     * @var CompanyAddressInfo $CompanyAddressInfo
     */
    protected $CompanyAddressInfo = null;

    /**
     * @var ArrayOfContactCommunicationItem $Phones
     */
    protected $Phones = null;

    /**
     * @var ArrayOfContactCommunicationItem $Emails
     */
    protected $Emails = null;

    /**
     * @var ArrayOfContactCommunicationItem $Faxes
     */
    protected $Faxes = null;

    /**
     * @var \DateTime $BirthDay
     */
    protected $BirthDay = null;

    /**
     * @var \DateTime $Anniversary
     */
    protected $Anniversary = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var string $SiteName
     */
    protected $SiteName = null;

    /**
     * @param int $Id
     * @param string $FirstName
     * @param string $LastName
     * @param string $Email
     * @param string $CompanyIdentifier
     * @param string $SID
     * @param string $Relationship
     * @param string $Type
     * @param string $Phone
     * @param string $PhoneExt
     * @param string $Fax
     * @param string $FaxExt
     * @param string $Title
     * @param string $School
     * @param string $NickName
     * @param string $SignificantOther
     * @param string $PortalPassword
     * @param string $UpdatedBy
     * @param ApiGender $Gender
     * @param Address $PersonalAddress
     * @param CompanyAddressInfo $CompanyAddressInfo
     * @param ArrayOfContactCommunicationItem $Phones
     * @param ArrayOfContactCommunicationItem $Emails
     * @param ArrayOfContactCommunicationItem $Faxes
     * @param string $SiteName
     */
    public function __construct($Id = null, $FirstName = null, $LastName = null, $Email = null, $CompanyIdentifier = null, $SID = null, $Relationship = null, $Type = null, $Phone = null, $PhoneExt = null, $Fax = null, $FaxExt = null, $Title = null, $School = null, $NickName = null, $SignificantOther = null, $PortalPassword = null, $UpdatedBy = null, ApiGender $Gender = null, Address $PersonalAddress = null, CompanyAddressInfo $CompanyAddressInfo = null, $Phones = null, $Emails = null, $Faxes = null, $SiteName = null)
    {
        $this->Id                 = $Id;
        $this->FirstName          = $FirstName;
        $this->LastName           = $LastName;
        $this->Email              = $Email;
        $this->CompanyIdentifier  = $CompanyIdentifier;
        $this->SID                = $SID;
        $this->Relationship       = $Relationship;
        $this->Type               = $Type;
        $this->Phone              = $Phone;
        $this->PhoneExt           = $PhoneExt;
        $this->Fax                = $Fax;
        $this->FaxExt             = $FaxExt;
        $this->Title              = $Title;
        $this->School             = $School;
        $this->NickName           = $NickName;
        $this->SignificantOther   = $SignificantOther;
        $this->PortalPassword     = $PortalPassword;
        $this->UpdatedBy          = $UpdatedBy;
        $this->Gender             = $Gender;
        $this->PersonalAddress    = $PersonalAddress;
        $this->CompanyAddressInfo = $CompanyAddressInfo;
        $this->Phones             = $Phones;
        $this->Emails             = $Emails;
        $this->Faxes              = $Faxes;
        $this->SiteName           = $SiteName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
        return $this->Inactive;
    }

    /**
     * @param boolean $Inactive
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setInactive($Inactive)
    {
        $this->Inactive = $Inactive;
        return $this;
    }

    /**
     * @return string
     */
    public function getSID()
    {
        return $this->SID;
    }

    /**
     * @param string $SID
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setSID($SID)
    {
        $this->SID = $SID;
        return $this;
    }

    /**
     * @return int
     */
    public function getManagerId()
    {
        return $this->ManagerId;
    }

    /**
     * @param int $ManagerId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setManagerId($ManagerId)
    {
        $this->ManagerId = $ManagerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAssistantId()
    {
        return $this->AssistantId;
    }

    /**
     * @param int $AssistantId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setAssistantId($AssistantId)
    {
        $this->AssistantId = $AssistantId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRelationship()
    {
        return $this->Relationship;
    }

    /**
     * @param string $Relationship
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setRelationship($Relationship)
    {
        $this->Relationship = $Relationship;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneExt()
    {
        return $this->PhoneExt;
    }

    /**
     * @param string $PhoneExt
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPhoneExt($PhoneExt)
    {
        $this->PhoneExt = $PhoneExt;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setFax($Fax)
    {
        $this->Fax = $Fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxExt()
    {
        return $this->FaxExt;
    }

    /**
     * @param string $FaxExt
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setFaxExt($FaxExt)
    {
        $this->FaxExt = $FaxExt;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSchool()
    {
        return $this->School;
    }

    /**
     * @param string $School
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setSchool($School)
    {
        $this->School = $School;
        return $this;
    }

    /**
     * @return string
     */
    public function getNickName()
    {
        return $this->NickName;
    }

    /**
     * @param string $NickName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setNickName($NickName)
    {
        $this->NickName = $NickName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getMarried()
    {
        return $this->Married;
    }

    /**
     * @param boolean $Married
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setMarried($Married)
    {
        $this->Married = $Married;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getChildren()
    {
        return $this->Children;
    }

    /**
     * @param boolean $Children
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setChildren($Children)
    {
        $this->Children = $Children;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignificantOther()
    {
        return $this->SignificantOther;
    }

    /**
     * @param string $SignificantOther
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setSignificantOther($SignificantOther)
    {
        $this->SignificantOther = $SignificantOther;
        return $this;
    }

    /**
     * @return string
     */
    public function getPortalPassword()
    {
        return $this->PortalPassword;
    }

    /**
     * @param string $PortalPassword
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPortalPassword($PortalPassword)
    {
        $this->PortalPassword = $PortalPassword;
        return $this;
    }

    /**
     * @return int
     */
    public function getPortalSecurityLevel()
    {
        return $this->PortalSecurityLevel;
    }

    /**
     * @param int $PortalSecurityLevel
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPortalSecurityLevel($PortalSecurityLevel)
    {
        $this->PortalSecurityLevel = $PortalSecurityLevel;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDisablePortalLogin()
    {
        return $this->DisablePortalLogin;
    }

    /**
     * @param boolean $DisablePortalLogin
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setDisablePortalLogin($DisablePortalLogin)
    {
        $this->DisablePortalLogin = $DisablePortalLogin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUnsubscribeFlag()
    {
        return $this->UnsubscribeFlag;
    }

    /**
     * @param boolean $UnsubscribeFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setUnsubscribeFlag($UnsubscribeFlag)
    {
        $this->UnsubscribeFlag = $UnsubscribeFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPersonalAddressFlag()
    {
        return $this->PersonalAddressFlag;
    }

    /**
     * @param boolean $PersonalAddressFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPersonalAddressFlag($PersonalAddressFlag)
    {
        $this->PersonalAddressFlag = $PersonalAddressFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ApiGender
     */
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * @param ApiGender $Gender
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setGender(ApiGender $Gender)
    {
        $this->Gender = $Gender;
        return $this;
    }

    /**
     * @return Address
     */
    public function getPersonalAddress()
    {
        return $this->PersonalAddress;
    }

    /**
     * @param Address $PersonalAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPersonalAddress(Address $PersonalAddress)
    {
        $this->PersonalAddress = $PersonalAddress;
        return $this;
    }

    /**
     * @return CompanyAddressInfo
     */
    public function getCompanyAddressInfo()
    {
        return $this->CompanyAddressInfo;
    }

    /**
     * @param CompanyAddressInfo $CompanyAddressInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setCompanyAddressInfo(CompanyAddressInfo $CompanyAddressInfo)
    {
        $this->CompanyAddressInfo = $CompanyAddressInfo;
        return $this;
    }

    /**
     * @return ArrayOfContactCommunicationItem
     */
    public function getPhones()
    {
        return $this->Phones;
    }

    /**
     * @param ArrayOfContactCommunicationItem $Phones
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setPhones($Phones)
    {
        $this->Phones = $Phones;
        return $this;
    }

    /**
     * @return ArrayOfContactCommunicationItem
     */
    public function getEmails()
    {
        return $this->Emails;
    }

    /**
     * @param ArrayOfContactCommunicationItem $Emails
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setEmails($Emails)
    {
        $this->Emails = $Emails;
        return $this;
    }

    /**
     * @return ArrayOfContactCommunicationItem
     */
    public function getFaxes()
    {
        return $this->Faxes;
    }

    /**
     * @param ArrayOfContactCommunicationItem $Faxes
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setFaxes($Faxes)
    {
        $this->Faxes = $Faxes;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDay()
    {
        if ($this->BirthDay == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BirthDay);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BirthDay
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setBirthDay(\DateTime $BirthDay)
    {
        $this->BirthDay = $BirthDay->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAnniversary()
    {
        if ($this->Anniversary == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Anniversary);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Anniversary
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setAnniversary(\DateTime $Anniversary)
    {
        $this->Anniversary = $Anniversary->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Contact
     */
    public function setSiteName($SiteName)
    {
        $this->SiteName = $SiteName;
        return $this;
    }

}
