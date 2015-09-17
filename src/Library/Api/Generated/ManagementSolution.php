<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManagementSolution
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $DefaultAgreementId
     */
    protected $DefaultAgreementId = null;

    /**
     * @var string $DeviceTypes
     */
    protected $DeviceTypes = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var string $ManagedIdentifier
     */
    protected $ManagedIdentifier = null;

    /**
     * @param int $Id
     * @param int $DefaultAgreementId
     * @param int $CompanyId
     */
    public function __construct($Id = null, $DefaultAgreementId = null, $CompanyId = null)
    {
        $this->Id                 = $Id;
        $this->DefaultAgreementId = $DefaultAgreementId;
        $this->CompanyId          = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSolution
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSolution
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultAgreementId()
    {
        return $this->DefaultAgreementId;
    }

    /**
     * @param int $DefaultAgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSolution
     */
    public function setDefaultAgreementId($DefaultAgreementId)
    {
        $this->DefaultAgreementId = $DefaultAgreementId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceTypes()
    {
        return $this->DeviceTypes;
    }

    /**
     * @param string $DeviceTypes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSolution
     */
    public function setDeviceTypes($DeviceTypes)
    {
        $this->DeviceTypes = $DeviceTypes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSolution
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagementSolution
     */
    public function setManagedIdentifier($ManagedIdentifier)
    {
        $this->ManagedIdentifier = $ManagedIdentifier;
        return $this;
    }

}
