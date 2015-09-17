<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CompanyAddressInfo
{

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

    public function __construct()
    {

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddressInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddressInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddressInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddressInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddressInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyAddressInfo
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

}
