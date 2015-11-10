<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeviceInfo
{

    /**
     * @var int $ConfigurationTypeId
     */
    protected $ConfigurationTypeId = null;

    /**
     * @var string $DeviceName
     */
    protected $DeviceName = null;

    /**
     * @var string $DeviceIdentifier
     */
    protected $DeviceIdentifier = null;

    /**
     * @var string $MacAddress
     */
    protected $MacAddress = null;

    /**
     * @var \DateTime $InstallDate
     */
    protected $InstallDate = null;

    /**
     * @var string $InstalledBy
     */
    protected $InstalledBy = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $ModelNumber
     */
    protected $ModelNumber = null;

    /**
     * @var string $LastLoginName
     */
    protected $LastLoginName = null;

    /**
     * @var boolean $BillFlag
     */
    protected $BillFlag = null;

    /**
     * @var int $BackupSuccesses
     */
    protected $BackupSuccesses = null;

    /**
     * @var int $BackupIncomplete
     */
    protected $BackupIncomplete = null;

    /**
     * @var int $BackupFailed
     */
    protected $BackupFailed = null;

    /**
     * @var int $BackupRestores
     */
    protected $BackupRestores = null;

    /**
     * @var \DateTime $LastBackupDate
     */
    protected $LastBackupDate = null;

    /**
     * @var string $BackupServerName
     */
    protected $BackupServerName = null;

    /**
     * @var float $BackupBillableSpaceGb
     */
    protected $BackupBillableSpaceGb = null;

    /**
     * @var string $BackupProtectedDeviceList
     */
    protected $BackupProtectedDeviceList = null;

    /**
     * @var int $BackupYear
     */
    protected $BackupYear = null;

    /**
     * @var int $BackupMonth
     */
    protected $BackupMonth = null;

    /**
     * @var string $VendorNotes
     */
    protected $VendorNotes = null;

    /**
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var string $DefaultGateway
     */
    protected $DefaultGateway = null;

    /**
     * @var string $OSType
     */
    protected $OSType = null;

    /**
     * @var string $OSInfo
     */
    protected $OSInfo = null;

    /**
     * @var string $CPUSpeed
     */
    protected $CPUSpeed = null;

    /**
     * @var string $RAM
     */
    protected $RAM = null;

    /**
     * @var string $LocalHardDrives
     */
    protected $LocalHardDrives = null;

    /**
     * @var boolean $IsActive
     */
    protected $IsActive = null;

    /**
     * @var string $ManagementLink
     */
    protected $ManagementLink = null;

    /**
     * @var string $RemoteLink
     */
    protected $RemoteLink = null;

    /**
     * @var \DateTime $PurchaseDate
     */
    protected $PurchaseDate = null;

    /**
     * @var \DateTime $WarrantyExpiration
     */
    protected $WarrantyExpiration = null;

    /**
     * @var string $TagNumber
     */
    protected $TagNumber = null;

    /**
     * @var ArrayOfConfigurationAnswer $Answers
     */
    protected $Answers = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $BusinessUnitId
     */
    protected $BusinessUnitId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $ParentConfigurationId
     */
    protected $ParentConfigurationId = null;

    /**
     * @var string $SlaName
     */
    protected $SlaName = null;

    /**
     * @var VendorCompany $VendorCompany
     */
    protected $VendorCompany = null;

    /**
     * @var ManufacturerCompany $ManufacturerCompany
     */
    protected $ManufacturerCompany = null;

    /**
     * @param string $DeviceName
     * @param string $DeviceIdentifier
     * @param string $MacAddress
     * @param string $InstalledBy
     * @param string $SerialNumber
     * @param string $ModelNumber
     * @param string $LastLoginName
     * @param string $BackupServerName
     * @param string $BackupProtectedDeviceList
     * @param string $VendorNotes
     * @param string $IPAddress
     * @param string $DefaultGateway
     * @param string $OSType
     * @param string $OSInfo
     * @param string $CPUSpeed
     * @param string $RAM
     * @param string $LocalHardDrives
     * @param string $ManagementLink
     * @param string $RemoteLink
     * @param string $TagNumber
     * @param ArrayOfConfigurationAnswer $Answers
     * @param string $SlaName
     * @param VendorCompany $VendorCompany
     * @param ManufacturerCompany $ManufacturerCompany
     */
    public function __construct($DeviceName = null, $DeviceIdentifier = null, $MacAddress = null, $InstalledBy = null, $SerialNumber = null, $ModelNumber = null, $LastLoginName = null, $BackupServerName = null, $BackupProtectedDeviceList = null, $VendorNotes = null, $IPAddress = null, $DefaultGateway = null, $OSType = null, $OSInfo = null, $CPUSpeed = null, $RAM = null, $LocalHardDrives = null, $ManagementLink = null, $RemoteLink = null, $TagNumber = null, $Answers = null, $SlaName = null, VendorCompany $VendorCompany = null, ManufacturerCompany $ManufacturerCompany = null)
    {
        $this->DeviceName                = $DeviceName;
        $this->DeviceIdentifier          = $DeviceIdentifier;
        $this->MacAddress                = $MacAddress;
        $this->InstalledBy               = $InstalledBy;
        $this->SerialNumber              = $SerialNumber;
        $this->ModelNumber               = $ModelNumber;
        $this->LastLoginName             = $LastLoginName;
        $this->BackupServerName          = $BackupServerName;
        $this->BackupProtectedDeviceList = $BackupProtectedDeviceList;
        $this->VendorNotes               = $VendorNotes;
        $this->IPAddress                 = $IPAddress;
        $this->DefaultGateway            = $DefaultGateway;
        $this->OSType                    = $OSType;
        $this->OSInfo                    = $OSInfo;
        $this->CPUSpeed                  = $CPUSpeed;
        $this->RAM                       = $RAM;
        $this->LocalHardDrives           = $LocalHardDrives;
        $this->ManagementLink            = $ManagementLink;
        $this->RemoteLink                = $RemoteLink;
        $this->TagNumber                 = $TagNumber;
        $this->Answers                   = $Answers;
        $this->SlaName                   = $SlaName;
        $this->VendorCompany             = $VendorCompany;
        $this->ManufacturerCompany       = $ManufacturerCompany;
    }

    /**
     * @return int
     */
    public function getConfigurationTypeId()
    {
        return $this->ConfigurationTypeId;
    }

    /**
     * @param int $ConfigurationTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setConfigurationTypeId($ConfigurationTypeId)
    {
        $this->ConfigurationTypeId = $ConfigurationTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceName()
    {
        return $this->DeviceName;
    }

    /**
     * @param string $DeviceName
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setDeviceName($DeviceName)
    {
        $this->DeviceName = $DeviceName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setDeviceIdentifier($DeviceIdentifier)
    {
        $this->DeviceIdentifier = $DeviceIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setMacAddress($MacAddress)
    {
        $this->MacAddress = $MacAddress;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInstallDate()
    {
        if ($this->InstallDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->InstallDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $InstallDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setInstallDate(\DateTime $InstallDate)
    {
        $this->InstallDate = $InstallDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getInstalledBy()
    {
        return $this->InstalledBy;
    }

    /**
     * @param string $InstalledBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setInstalledBy($InstalledBy)
    {
        $this->InstalledBy = $InstalledBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setModelNumber($ModelNumber)
    {
        $this->ModelNumber = $ModelNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastLoginName()
    {
        return $this->LastLoginName;
    }

    /**
     * @param string $LastLoginName
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setLastLoginName($LastLoginName)
    {
        $this->LastLoginName = $LastLoginName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillFlag()
    {
        return $this->BillFlag;
    }

    /**
     * @param boolean $BillFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBillFlag($BillFlag)
    {
        $this->BillFlag = $BillFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackupSuccesses()
    {
        return $this->BackupSuccesses;
    }

    /**
     * @param int $BackupSuccesses
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupSuccesses($BackupSuccesses)
    {
        $this->BackupSuccesses = $BackupSuccesses;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackupIncomplete()
    {
        return $this->BackupIncomplete;
    }

    /**
     * @param int $BackupIncomplete
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupIncomplete($BackupIncomplete)
    {
        $this->BackupIncomplete = $BackupIncomplete;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackupFailed()
    {
        return $this->BackupFailed;
    }

    /**
     * @param int $BackupFailed
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupFailed($BackupFailed)
    {
        $this->BackupFailed = $BackupFailed;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackupRestores()
    {
        return $this->BackupRestores;
    }

    /**
     * @param int $BackupRestores
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupRestores($BackupRestores)
    {
        $this->BackupRestores = $BackupRestores;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBackupDate()
    {
        if ($this->LastBackupDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastBackupDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastBackupDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setLastBackupDate(\DateTime $LastBackupDate)
    {
        $this->LastBackupDate = $LastBackupDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getBackupServerName()
    {
        return $this->BackupServerName;
    }

    /**
     * @param string $BackupServerName
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupServerName($BackupServerName)
    {
        $this->BackupServerName = $BackupServerName;
        return $this;
    }

    /**
     * @return float
     */
    public function getBackupBillableSpaceGb()
    {
        return $this->BackupBillableSpaceGb;
    }

    /**
     * @param float $BackupBillableSpaceGb
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupBillableSpaceGb($BackupBillableSpaceGb)
    {
        $this->BackupBillableSpaceGb = $BackupBillableSpaceGb;
        return $this;
    }

    /**
     * @return string
     */
    public function getBackupProtectedDeviceList()
    {
        return $this->BackupProtectedDeviceList;
    }

    /**
     * @param string $BackupProtectedDeviceList
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupProtectedDeviceList($BackupProtectedDeviceList)
    {
        $this->BackupProtectedDeviceList = $BackupProtectedDeviceList;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackupYear()
    {
        return $this->BackupYear;
    }

    /**
     * @param int $BackupYear
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupYear($BackupYear)
    {
        $this->BackupYear = $BackupYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getBackupMonth()
    {
        return $this->BackupMonth;
    }

    /**
     * @param int $BackupMonth
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBackupMonth($BackupMonth)
    {
        $this->BackupMonth = $BackupMonth;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorNotes()
    {
        return $this->VendorNotes;
    }

    /**
     * @param string $VendorNotes
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setVendorNotes($VendorNotes)
    {
        $this->VendorNotes = $VendorNotes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setIPAddress($IPAddress)
    {
        $this->IPAddress = $IPAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultGateway()
    {
        return $this->DefaultGateway;
    }

    /**
     * @param string $DefaultGateway
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setDefaultGateway($DefaultGateway)
    {
        $this->DefaultGateway = $DefaultGateway;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setOSInfo($OSInfo)
    {
        $this->OSInfo = $OSInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getCPUSpeed()
    {
        return $this->CPUSpeed;
    }

    /**
     * @param string $CPUSpeed
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setCPUSpeed($CPUSpeed)
    {
        $this->CPUSpeed = $CPUSpeed;
        return $this;
    }

    /**
     * @return string
     */
    public function getRAM()
    {
        return $this->RAM;
    }

    /**
     * @param string $RAM
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setRAM($RAM)
    {
        $this->RAM = $RAM;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocalHardDrives()
    {
        return $this->LocalHardDrives;
    }

    /**
     * @param string $LocalHardDrives
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setLocalHardDrives($LocalHardDrives)
    {
        $this->LocalHardDrives = $LocalHardDrives;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setRemoteLink($RemoteLink)
    {
        $this->RemoteLink = $RemoteLink;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        if ($this->PurchaseDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PurchaseDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PurchaseDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setPurchaseDate(\DateTime $PurchaseDate)
    {
        $this->PurchaseDate = $PurchaseDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getWarrantyExpiration()
    {
        if ($this->WarrantyExpiration == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->WarrantyExpiration);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $WarrantyExpiration
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setWarrantyExpiration(\DateTime $WarrantyExpiration)
    {
        $this->WarrantyExpiration = $WarrantyExpiration->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getTagNumber()
    {
        return $this->TagNumber;
    }

    /**
     * @param string $TagNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setTagNumber($TagNumber)
    {
        $this->TagNumber = $TagNumber;
        return $this;
    }

    /**
     * @return ArrayOfConfigurationAnswer
     */
    public function getAnswers()
    {
        return $this->Answers;
    }

    /**
     * @param ArrayOfConfigurationAnswer $Answers
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setAnswers($Answers)
    {
        $this->Answers = $Answers;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->BusinessUnitId;
    }

    /**
     * @param int $BusinessUnitId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setBusinessUnitId($BusinessUnitId)
    {
        $this->BusinessUnitId = $BusinessUnitId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentConfigurationId()
    {
        return $this->ParentConfigurationId;
    }

    /**
     * @param int $ParentConfigurationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setParentConfigurationId($ParentConfigurationId)
    {
        $this->ParentConfigurationId = $ParentConfigurationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlaName()
    {
        return $this->SlaName;
    }

    /**
     * @param string $SlaName
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setSlaName($SlaName)
    {
        $this->SlaName = $SlaName;
        return $this;
    }

    /**
     * @return VendorCompany
     */
    public function getVendorCompany()
    {
        return $this->VendorCompany;
    }

    /**
     * @param VendorCompany $VendorCompany
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setVendorCompany(VendorCompany $VendorCompany)
    {
        $this->VendorCompany = $VendorCompany;
        return $this;
    }

    /**
     * @return ManufacturerCompany
     */
    public function getManufacturerCompany()
    {
        return $this->ManufacturerCompany;
    }

    /**
     * @param ManufacturerCompany $ManufacturerCompany
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeviceInfo
     */
    public function setManufacturerCompany(ManufacturerCompany $ManufacturerCompany)
    {
        $this->ManufacturerCompany = $ManufacturerCompany;
        return $this;
    }

}
