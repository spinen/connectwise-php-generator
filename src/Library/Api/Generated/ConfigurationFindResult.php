<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConfigurationFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ConfigurationName
     */
    protected $ConfigurationName = null;

    /**
     * @var int $ConfigurationTypeId
     */
    protected $ConfigurationTypeId = null;

    /**
     * @var string $ConfigurationType
     */
    protected $ConfigurationType = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var int $StatusId
     */
    protected $StatusId = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $ContactName
     */
    protected $ContactName = null;

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
     * @var \DateTime $WarrantyExpiration
     */
    protected $WarrantyExpiration = null;

    /**
     * @var string $InstalledBy
     */
    protected $InstalledBy = null;

    /**
     * @var boolean $ClosedFlag
     */
    protected $ClosedFlag = null;

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
     * @param string $ConfigurationName
     * @param string $ConfigurationType
     * @param string $CompanyIdentifier
     * @param string $Status
     * @param string $ContactName
     * @param string $SerialNumber
     * @param string $ModelNumber
     * @param string $TagNumber
     * @param string $InstalledBy
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $ConfigurationName = null, $ConfigurationType = null, $CompanyIdentifier = null, $Status = null, $ContactName = null, $SerialNumber = null, $ModelNumber = null, $TagNumber = null, $InstalledBy = null, $UpdatedBy = null)
    {
        $this->Id                = $Id;
        $this->ConfigurationName = $ConfigurationName;
        $this->ConfigurationType = $ConfigurationType;
        $this->CompanyIdentifier = $CompanyIdentifier;
        $this->Status            = $Status;
        $this->ContactName       = $ContactName;
        $this->SerialNumber      = $SerialNumber;
        $this->ModelNumber       = $ModelNumber;
        $this->TagNumber         = $TagNumber;
        $this->InstalledBy       = $InstalledBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setConfigurationName($ConfigurationName)
    {
        $this->ConfigurationName = $ConfigurationName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setConfigurationType($ConfigurationType)
    {
        $this->ConfigurationType = $ConfigurationType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setContactName($ContactName)
    {
        $this->ContactName = $ContactName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setTagNumber($TagNumber)
    {
        $this->TagNumber = $TagNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setWarrantyExpiration(\DateTime $WarrantyExpiration)
    {
        $this->WarrantyExpiration = $WarrantyExpiration->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setInstalledBy($InstalledBy)
    {
        $this->InstalledBy = $InstalledBy;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosedFlag()
    {
        return $this->ClosedFlag;
    }

    /**
     * @param boolean $ClosedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setClosedFlag($ClosedFlag)
    {
        $this->ClosedFlag = $ClosedFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
