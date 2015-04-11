<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Configuration
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ConfigurationTypeId
     */
    protected $ConfigurationTypeId = null;

    /**
     * @var string $ConfigurationType
     */
    protected $ConfigurationType = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $ConfigurationName
     */
    protected $ConfigurationName = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $BusinessUnitId
     */
    protected $BusinessUnitId = null;

    /**
     * @var string $DeviceIdentifier
     */
    protected $DeviceIdentifier = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $ModelNumber
     */
    protected $ModelNumber = null;

    /**
     * @var string $TagNumber
     */
    protected $TagNumber = null;

    /**
     * @var \DateTime $PurchaseDate
     */
    protected $PurchaseDate = null;

    /**
     * @var \DateTime $InstallationDate
     */
    protected $InstallationDate = null;

    /**
     * @var string $InstalledBy
     */
    protected $InstalledBy = null;

    /**
     * @var \DateTime $WarrantyExpiration
     */
    protected $WarrantyExpiration = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

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
     * @var string $ZipCode
     */
    protected $ZipCode = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $VendorNotes
     */
    protected $VendorNotes = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $MacAddress
     */
    protected $MacAddress = null;

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
     * @var int $ParentConfigurationId
     */
    protected $ParentConfigurationId = null;

    /**
     * @var ArrayOfConfigurationQuestion $ConfigurationQuestions
     */
    protected $ConfigurationQuestions = null;

    /**
     * @var VendorCompany $VendorCompany
     */
    protected $VendorCompany = null;

    /**
     * @var ManufacturerCompany $ManufacturerCompany
     */
    protected $ManufacturerCompany = null;

    /**
     * @param int $Id
     * @param int $ConfigurationTypeId
     * @param string $ConfigurationType
     * @param string $Status
     * @param string $ConfigurationName
     * @param string $ContactName
     * @param string $CompanyName
     * @param int $CompanyId
     * @param string $DeviceIdentifier
     * @param string $SerialNumber
     * @param string $ModelNumber
     * @param string $TagNumber
     * @param string $InstalledBy
     * @param string $UpdatedBy
     * @param string $AddressLine1
     * @param string $AddressLine2
     * @param string $City
     * @param string $State
     * @param string $ZipCode
     * @param string $Country
     * @param string $VendorNotes
     * @param string $Notes
     * @param string $MacAddress
     * @param string $LastLoginName
     * @param string $BackupServerName
     * @param string $BackupProtectedDeviceList
     * @param string $IPAddress
     * @param string $DefaultGateway
     * @param string $OSType
     * @param string $OSInfo
     * @param string $CPUSpeed
     * @param string $RAM
     * @param string $LocalHardDrives
     * @param ArrayOfConfigurationQuestion $ConfigurationQuestions
     * @param VendorCompany $VendorCompany
     * @param ManufacturerCompany $ManufacturerCompany
     */
    public function __construct($Id = null, $ConfigurationTypeId = null, $ConfigurationType = null, $Status = null, $ConfigurationName = null, $ContactName = null, $CompanyName = null, $CompanyId = null, $DeviceIdentifier = null, $SerialNumber = null, $ModelNumber = null, $TagNumber = null, $InstalledBy = null, $UpdatedBy = null, $AddressLine1 = null, $AddressLine2 = null, $City = null, $State = null, $ZipCode = null, $Country = null, $VendorNotes = null, $Notes = null, $MacAddress = null, $LastLoginName = null, $BackupServerName = null, $BackupProtectedDeviceList = null, $IPAddress = null, $DefaultGateway = null, $OSType = null, $OSInfo = null, $CPUSpeed = null, $RAM = null, $LocalHardDrives = null, $ConfigurationQuestions = null, VendorCompany $VendorCompany = null, ManufacturerCompany $ManufacturerCompany = null)
    {
        $this->Id                        = $Id;
        $this->ConfigurationTypeId       = $ConfigurationTypeId;
        $this->ConfigurationType         = $ConfigurationType;
        $this->Status                    = $Status;
        $this->ConfigurationName         = $ConfigurationName;
        $this->ContactName               = $ContactName;
        $this->CompanyName               = $CompanyName;
        $this->CompanyId                 = $CompanyId;
        $this->DeviceIdentifier          = $DeviceIdentifier;
        $this->SerialNumber              = $SerialNumber;
        $this->ModelNumber               = $ModelNumber;
        $this->TagNumber                 = $TagNumber;
        $this->InstalledBy               = $InstalledBy;
        $this->UpdatedBy                 = $UpdatedBy;
        $this->AddressLine1              = $AddressLine1;
        $this->AddressLine2              = $AddressLine2;
        $this->City                      = $City;
        $this->State                     = $State;
        $this->ZipCode                   = $ZipCode;
        $this->Country                   = $Country;
        $this->VendorNotes               = $VendorNotes;
        $this->Notes                     = $Notes;
        $this->MacAddress                = $MacAddress;
        $this->LastLoginName             = $LastLoginName;
        $this->BackupServerName          = $BackupServerName;
        $this->BackupProtectedDeviceList = $BackupProtectedDeviceList;
        $this->IPAddress                 = $IPAddress;
        $this->DefaultGateway            = $DefaultGateway;
        $this->OSType                    = $OSType;
        $this->OSInfo                    = $OSInfo;
        $this->CPUSpeed                  = $CPUSpeed;
        $this->RAM                       = $RAM;
        $this->LocalHardDrives           = $LocalHardDrives;
        $this->ConfigurationQuestions    = $ConfigurationQuestions;
        $this->VendorCompany             = $VendorCompany;
        $this->ManufacturerCompany       = $ManufacturerCompany;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setConfigurationTypeId($ConfigurationTypeId)
    {
        $this->ConfigurationTypeId = $ConfigurationTypeId;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfigurationType()
    {
        return $this->ConfigurationType;
    }

    /**
     * @param string $ConfigurationType
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setConfigurationType($ConfigurationType)
    {
        $this->ConfigurationType = $ConfigurationType;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId()
    {
        return $this->StatusId;
    }

    /**
     * @param int $StatusId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setStatusId($StatusId)
    {
        $this->StatusId = $StatusId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getConfigurationName()
    {
        return $this->ConfigurationName;
    }

    /**
     * @param string $ConfigurationName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setConfigurationName($ConfigurationName)
    {
        $this->ConfigurationName = $ConfigurationName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setBusinessUnitId($BusinessUnitId)
    {
        $this->BusinessUnitId = $BusinessUnitId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setDeviceIdentifier($DeviceIdentifier)
    {
        $this->DeviceIdentifier = $DeviceIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setModelNumber($ModelNumber)
    {
        $this->ModelNumber = $ModelNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setTagNumber($TagNumber)
    {
        $this->TagNumber = $TagNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setPurchaseDate(\DateTime $PurchaseDate)
    {
        $this->PurchaseDate = $PurchaseDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInstallationDate()
    {
        if ($this->InstallationDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->InstallationDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $InstallationDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setInstallationDate(\DateTime $InstallationDate)
    {
        $this->InstallationDate = $InstallationDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setInstalledBy($InstalledBy)
    {
        $this->InstalledBy = $InstalledBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setWarrantyExpiration(\DateTime $WarrantyExpiration)
    {
        $this->WarrantyExpiration = $WarrantyExpiration->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setVendorNotes($VendorNotes)
    {
        $this->VendorNotes = $VendorNotes;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setMacAddress($MacAddress)
    {
        $this->MacAddress = $MacAddress;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setBackupMonth($BackupMonth)
    {
        $this->BackupMonth = $BackupMonth;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setParentConfigurationId($ParentConfigurationId)
    {
        $this->ParentConfigurationId = $ParentConfigurationId;
        return $this;
    }

    /**
     * @return ArrayOfConfigurationQuestion
     */
    public function getConfigurationQuestions()
    {
        return $this->ConfigurationQuestions;
    }

    /**
     * @param ArrayOfConfigurationQuestion $ConfigurationQuestions
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setConfigurationQuestions($ConfigurationQuestions)
    {
        $this->ConfigurationQuestions = $ConfigurationQuestions;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Configuration
     */
    public function setManufacturerCompany(ManufacturerCompany $ManufacturerCompany)
    {
        $this->ManufacturerCompany = $ManufacturerCompany;
        return $this;
    }

}
