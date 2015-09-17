<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PurchasingCompanyAddress
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $POPhone
     */
    protected $POPhone = null;

    /**
     * @var string $PhoneExt
     */
    protected $PhoneExt = null;

    /**
     * @var string $SiteName
     */
    protected $SiteName = null;

    /**
     * @var string $StreetLine1
     */
    protected $StreetLine1 = null;

    /**
     * @var string $StreetLine2
     */
    protected $StreetLine2 = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPOPhone()
    {
        return $this->POPhone;
    }

    /**
     * @param string $POPhone
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setPOPhone($POPhone)
    {
        $this->POPhone = $POPhone;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setPhoneExt($PhoneExt)
    {
        $this->PhoneExt = $PhoneExt;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setSiteName($SiteName)
    {
        $this->SiteName = $SiteName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLine1()
    {
        return $this->StreetLine1;
    }

    /**
     * @param string $StreetLine1
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setStreetLine1($StreetLine1)
    {
        $this->StreetLine1 = $StreetLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLine2()
    {
        return $this->StreetLine2;
    }

    /**
     * @param string $StreetLine2
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setStreetLine2($StreetLine2)
    {
        $this->StreetLine2 = $StreetLine2;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setCity($City)
    {
        $this->City = $City;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchasingCompanyAddress
     */
    public function setZip($Zip)
    {
        $this->Zip = $Zip;
        return $this;
    }

}
