<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CompanyFindResult
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
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

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
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Territory
     */
    protected $Territory = null;

    /**
     * @var string $Website
     */
    protected $Website = null;

    /**
     * @var string $Market
     */
    protected $Market = null;

    /**
     * @var int $DefaultContactId
     */
    protected $DefaultContactId = null;

    /**
     * @var int $DefaultBillingContactId
     */
    protected $DefaultBillingContactId = null;

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
     * @param string $CompanyName
     * @param string $CompanyIdentifier
     * @param string $PhoneNumber
     * @param string $FaxNumber
     * @param string $AddressLine1
     * @param string $AddressLine2
     * @param string $City
     * @param string $State
     * @param string $Zip
     * @param string $Country
     * @param string $Type
     * @param string $Status
     * @param string $Territory
     * @param string $Website
     * @param string $Market
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $CompanyName = null, $CompanyIdentifier = null, $PhoneNumber = null, $FaxNumber = null, $AddressLine1 = null, $AddressLine2 = null, $City = null, $State = null, $Zip = null, $Country = null, $Type = null, $Status = null, $Territory = null, $Website = null, $Market = null, $UpdatedBy = null)
    {
        $this->Id                = $Id;
        $this->CompanyName       = $CompanyName;
        $this->CompanyIdentifier = $CompanyIdentifier;
        $this->PhoneNumber       = $PhoneNumber;
        $this->FaxNumber         = $FaxNumber;
        $this->AddressLine1      = $AddressLine1;
        $this->AddressLine2      = $AddressLine2;
        $this->City              = $City;
        $this->State             = $State;
        $this->Zip               = $Zip;
        $this->Country           = $Country;
        $this->Type              = $Type;
        $this->Status            = $Status;
        $this->Territory         = $Territory;
        $this->Website           = $Website;
        $this->Market            = $Market;
        $this->UpdatedBy         = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setFaxNumber($FaxNumber)
    {
        $this->FaxNumber = $FaxNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setTerritory($Territory)
    {
        $this->Territory = $Territory;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param string $Website
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;
        return $this;
    }

    /**
     * @return string
     */
    public function getMarket()
    {
        return $this->Market;
    }

    /**
     * @param string $Market
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setMarket($Market)
    {
        $this->Market = $Market;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultContactId()
    {
        return $this->DefaultContactId;
    }

    /**
     * @param int $DefaultContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setDefaultContactId($DefaultContactId)
    {
        $this->DefaultContactId = $DefaultContactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultBillingContactId()
    {
        return $this->DefaultBillingContactId;
    }

    /**
     * @param int $DefaultBillingContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setDefaultBillingContactId($DefaultBillingContactId)
    {
        $this->DefaultBillingContactId = $DefaultBillingContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
