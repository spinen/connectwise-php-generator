<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManagedDevice
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Level
     */
    protected $Level = null;

    /**
     * @var string $ManagedIdentifier
     */
    protected $ManagedIdentifier = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var DeviceInfo $Device
     */
    protected $Device = null;

    /**
     * @var BillingInfo $Billing
     */
    protected $Billing = null;

    /**
     * @param string $Type
     * @param string $Level
     * @param string $ManagedIdentifier
     * @param string $CompanyIdentifier
     * @param DeviceInfo $Device
     * @param BillingInfo $Billing
     */
    public function __construct($Type = null, $Level = null, $ManagedIdentifier = null, $CompanyIdentifier = null, DeviceInfo $Device = null, BillingInfo $Billing = null)
    {
        $this->Type              = $Type;
        $this->Level             = $Level;
        $this->ManagedIdentifier = $ManagedIdentifier;
        $this->CompanyIdentifier = $CompanyIdentifier;
        $this->Device            = $Device;
        $this->Billing           = $Billing;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setType($Type)
    {
        $this->Type = $Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * @param string $Level
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setLevel($Level)
    {
        $this->Level = $Level;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagedIdentifier()
    {
        return $this->ManagedIdentifier;
    }

    /**
     * @param string $ManagedIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setManagedIdentifier($ManagedIdentifier)
    {
        $this->ManagedIdentifier = $ManagedIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
    }

    /**
     * @return DeviceInfo
     */
    public function getDevice()
    {
        return $this->Device;
    }

    /**
     * @param DeviceInfo $Device
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setDevice(DeviceInfo $Device)
    {
        $this->Device = $Device;
        return $this;
    }

    /**
     * @return BillingInfo
     */
    public function getBilling()
    {
        return $this->Billing;
    }

    /**
     * @param BillingInfo $Billing
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedDevice
     */
    public function setBilling(BillingInfo $Billing)
    {
        $this->Billing = $Billing;
        return $this;
    }

}
