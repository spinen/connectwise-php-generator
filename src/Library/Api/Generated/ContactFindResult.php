<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ContactFindResult
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
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Relationship
     */
    protected $Relationship = null;

    /**
     * @var boolean $DefaultFlag
     */
    protected $DefaultFlag = null;

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
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var int $PortalSecurityLevel
     */
    protected $PortalSecurityLevel = null;

    /**
     * @var boolean $DisablePortalLogin
     */
    protected $DisablePortalLogin = null;

    /**
     * @var string $PortalSecurityCaption
     */
    protected $PortalSecurityCaption = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setType($Type)
    {
        $this->Type = $Type;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setRelationship($Relationship)
    {
        $this->Relationship = $Relationship;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultFlag()
    {
        return $this->DefaultFlag;
    }

    /**
     * @param boolean $DefaultFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setDefaultFlag($DefaultFlag)
    {
        $this->DefaultFlag = $DefaultFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setState($State)
    {
        $this->State = $State;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setDisablePortalLogin($DisablePortalLogin)
    {
        $this->DisablePortalLogin = $DisablePortalLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getPortalSecurityCaption()
    {
        return $this->PortalSecurityCaption;
    }

    /**
     * @param string $PortalSecurityCaption
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setPortalSecurityCaption($PortalSecurityCaption)
    {
        $this->PortalSecurityCaption = $PortalSecurityCaption;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
     */
    public function setAssistantId($AssistantId)
    {
        $this->AssistantId = $AssistantId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ContactFindResult
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
