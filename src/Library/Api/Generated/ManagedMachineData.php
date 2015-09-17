<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManagedMachineData
{

    /**
     * @var string $GroupIdentifier
     */
    protected $GroupIdentifier = null;

    /**
     * @var string $DeviceIdentifier
     */
    protected $DeviceIdentifier = null;

    /**
     * @var string $ComputerName
     */
    protected $ComputerName = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $DateInstalled
     */
    protected $DateInstalled = null;

    /**
     * @var string $ModelNumber
     */
    protected $ModelNumber = null;

    /**
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var string $DefaultGatewayIPAddress
     */
    protected $DefaultGatewayIPAddress = null;

    /**
     * @var string $OSType
     */
    protected $OSType = null;

    /**
     * @var string $OSInfo
     */
    protected $OSInfo = null;

    /**
     * @var string $ProcessorDescription
     */
    protected $ProcessorDescription = null;

    /**
     * @var string $RamSize
     */
    protected $RamSize = null;

    /**
     * @var ArrayOfHardDrive $HardDrives
     */
    protected $HardDrives = null;

    /**
     * @var string $LastUsernameLogin
     */
    protected $LastUsernameLogin = null;

    /**
     * @var string $ManagementLink
     */
    protected $ManagementLink = null;

    /**
     * @var string $RemoteLink
     */
    protected $RemoteLink = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var \DateTime $WarrantyExpirationDate
     */
    protected $WarrantyExpirationDate = null;

    /**
     * @var string $MacAddress
     */
    protected $MacAddress = null;

    /**
     * @var string $CustomField
     */
    protected $CustomField = null;

    /**
     * @var boolean $BillThisMachine
     */
    protected $BillThisMachine = null;

    /**
     * @param boolean $IsActive
     */
    public function __construct($IsActive = null)
    {
        $this->IsActive = $IsActive;
    }

    /**
     * @return string
     */
    public function getGroupIdentifier()
    {
        return $this->GroupIdentifier;
    }

    /**
     * @param string $GroupIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setGroupIdentifier($GroupIdentifier)
    {
        $this->GroupIdentifier = $GroupIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceIdentifier()
    {
        return $this->DeviceIdentifier;
    }

    /**
     * @param string $DeviceIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setDeviceIdentifier($DeviceIdentifier)
    {
        $this->DeviceIdentifier = $DeviceIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getComputerName()
    {
        return $this->ComputerName;
    }

    /**
     * @param string $ComputerName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setComputerName($ComputerName)
    {
        $this->ComputerName = $ComputerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateInstalled()
    {
        return $this->DateInstalled;
    }

    /**
     * @param string $DateInstalled
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setDateInstalled($DateInstalled)
    {
        $this->DateInstalled = $DateInstalled;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelNumber()
    {
        return $this->ModelNumber;
    }

    /**
     * @param string $ModelNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setModelNumber($ModelNumber)
    {
        $this->ModelNumber = $ModelNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setIPAddress($IPAddress)
    {
        $this->IPAddress = $IPAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultGatewayIPAddress()
    {
        return $this->DefaultGatewayIPAddress;
    }

    /**
     * @param string $DefaultGatewayIPAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setDefaultGatewayIPAddress($DefaultGatewayIPAddress)
    {
        $this->DefaultGatewayIPAddress = $DefaultGatewayIPAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getOSType()
    {
        return $this->OSType;
    }

    /**
     * @param string $OSType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setOSType($OSType)
    {
        $this->OSType = $OSType;
        return $this;
    }

    /**
     * @return string
     */
    public function getOSInfo()
    {
        return $this->OSInfo;
    }

    /**
     * @param string $OSInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setOSInfo($OSInfo)
    {
        $this->OSInfo = $OSInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getProcessorDescription()
    {
        return $this->ProcessorDescription;
    }

    /**
     * @param string $ProcessorDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setProcessorDescription($ProcessorDescription)
    {
        $this->ProcessorDescription = $ProcessorDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getRamSize()
    {
        return $this->RamSize;
    }

    /**
     * @param string $RamSize
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setRamSize($RamSize)
    {
        $this->RamSize = $RamSize;
        return $this;
    }

    /**
     * @return ArrayOfHardDrive
     */
    public function getHardDrives()
    {
        return $this->HardDrives;
    }

    /**
     * @param ArrayOfHardDrive $HardDrives
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setHardDrives($HardDrives)
    {
        $this->HardDrives = $HardDrives;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastUsernameLogin()
    {
        return $this->LastUsernameLogin;
    }

    /**
     * @param string $LastUsernameLogin
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setLastUsernameLogin($LastUsernameLogin)
    {
        $this->LastUsernameLogin = $LastUsernameLogin;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagementLink()
    {
        return $this->ManagementLink;
    }

    /**
     * @param string $ManagementLink
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setManagementLink($ManagementLink)
    {
        $this->ManagementLink = $ManagementLink;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemoteLink()
    {
        return $this->RemoteLink;
    }

    /**
     * @param string $RemoteLink
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setRemoteLink($RemoteLink)
    {
        $this->RemoteLink = $RemoteLink;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param boolean $IsActive
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWarrantyExpirationDate()
    {
        if ($this->WarrantyExpirationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->WarrantyExpirationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $WarrantyExpirationDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setWarrantyExpirationDate(\DateTime $WarrantyExpirationDate = null)
    {
        if ($WarrantyExpirationDate == null) {
            $this->WarrantyExpirationDate = null;
        } else {
            $this->WarrantyExpirationDate = $WarrantyExpirationDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getMacAddress()
    {
        return $this->MacAddress;
    }

    /**
     * @param string $MacAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setMacAddress($MacAddress)
    {
        $this->MacAddress = $MacAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomField()
    {
        return $this->CustomField;
    }

    /**
     * @param string $CustomField
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setCustomField($CustomField)
    {
        $this->CustomField = $CustomField;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillThisMachine()
    {
        return $this->BillThisMachine;
    }

    /**
     * @param boolean $BillThisMachine
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedMachineData
     */
    public function setBillThisMachine($BillThisMachine)
    {
        $this->BillThisMachine = $BillThisMachine;
        return $this;
    }

}
