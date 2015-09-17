<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Company
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
     * @var CompanyAddress $DefaultAddress
     */
    protected $DefaultAddress = null;

    /**
     * @var ArrayOfCompanyAddress $Addresses
     */
    protected $Addresses = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var string $WebSite
     */
    protected $WebSite = null;

    /**
     * @var string $Territory
     */
    protected $Territory = null;

    /**
     * @var string $Market
     */
    protected $Market = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var int $DefaultContactId
     */
    protected $DefaultContactId = null;

    /**
     * @var int $DefaultBillingContactId
     */
    protected $DefaultBillingContactId = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
    }

    /**
     * @return CompanyAddress
     */
    public function getDefaultAddress()
    {
        return $this->DefaultAddress;
    }

    /**
     * @param CompanyAddress $DefaultAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setDefaultAddress(CompanyAddress $DefaultAddress)
    {
        $this->DefaultAddress = $DefaultAddress;
        return $this;
    }

    /**
     * @return ArrayOfCompanyAddress
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * @param ArrayOfCompanyAddress $Addresses
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setAddresses($Addresses)
    {
        $this->Addresses = $Addresses;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setFaxNumber($FaxNumber)
    {
        $this->FaxNumber = $FaxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getWebSite()
    {
        return $this->WebSite;
    }

    /**
     * @param string $WebSite
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setWebSite($WebSite)
    {
        $this->WebSite = $WebSite;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setTerritory($Territory)
    {
        $this->Territory = $Territory;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setMarket($Market)
    {
        $this->Market = $Market;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
     */
    public function setDefaultBillingContactId($DefaultBillingContactId)
    {
        $this->DefaultBillingContactId = $DefaultBillingContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Company
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
