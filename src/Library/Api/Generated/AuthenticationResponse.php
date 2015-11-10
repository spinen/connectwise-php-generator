<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AuthenticationResponse
{

    /**
     * @var string $PortalCompanyName
     */
    protected $PortalCompanyName = null;

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var boolean $HasError
     */
    protected $HasError = null;

    /**
     * @var string $ErrorType
     */
    protected $ErrorType = null;

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var int $PortalConfigId
     */
    protected $PortalConfigId = null;

    /**
     * @var string $MachineId
     */
    protected $MachineId = null;

    /**
     * @var string $DeviceId
     */
    protected $DeviceId = null;

    /**
     * @var int $ConfigId
     */
    protected $ConfigId = null;

    /**
     * @param string $PortalCompanyName
     * @param string $SessionID
     * @param int $CompanyId
     * @param int $ContactId
     * @param boolean $HasError
     * @param string $ErrorType
     * @param string $ErrorMessage
     * @param int $PortalConfigId
     * @param string $MachineId
     * @param string $DeviceId
     * @param int $ConfigId
     */
    public function __construct($PortalCompanyName = null, $SessionID = null, $CompanyId = null, $ContactId = null, $HasError = null, $ErrorType = null, $ErrorMessage = null, $PortalConfigId = null, $MachineId = null, $DeviceId = null, $ConfigId = null)
    {
        $this->PortalCompanyName = $PortalCompanyName;
        $this->SessionID         = $SessionID;
        $this->CompanyId         = $CompanyId;
        $this->ContactId         = $ContactId;
        $this->HasError          = $HasError;
        $this->ErrorType         = $ErrorType;
        $this->ErrorMessage      = $ErrorMessage;
        $this->PortalConfigId    = $PortalConfigId;
        $this->MachineId         = $MachineId;
        $this->DeviceId          = $DeviceId;
        $this->ConfigId          = $ConfigId;
    }

    /**
     * @return string
     */
    public function getPortalCompanyName()
    {
        return $this->PortalCompanyName;
    }

    /**
     * @param string $PortalCompanyName
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setPortalCompanyName($PortalCompanyName)
    {
        $this->PortalCompanyName = $PortalCompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSessionID()
    {
        return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setSessionID($SessionID)
    {
        $this->SessionID = $SessionID;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHasError()
    {
        return $this->HasError;
    }

    /**
     * @param boolean $HasError
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setHasError($HasError)
    {
        $this->HasError = $HasError;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorType()
    {
        return $this->ErrorType;
    }

    /**
     * @param string $ErrorType
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setErrorType($ErrorType)
    {
        $this->ErrorType = $ErrorType;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setErrorMessage($ErrorMessage)
    {
        $this->ErrorMessage = $ErrorMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getPortalConfigId()
    {
        return $this->PortalConfigId;
    }

    /**
     * @param int $PortalConfigId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setPortalConfigId($PortalConfigId)
    {
        $this->PortalConfigId = $PortalConfigId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMachineId()
    {
        return $this->MachineId;
    }

    /**
     * @param string $MachineId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setMachineId($MachineId)
    {
        $this->MachineId = $MachineId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }

    /**
     * @param string $DeviceId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setDeviceId($DeviceId)
    {
        $this->DeviceId = $DeviceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfigId()
    {
        return $this->ConfigId;
    }

    /**
     * @param int $ConfigId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticationResponse
     */
    public function setConfigId($ConfigId)
    {
        $this->ConfigId = $ConfigId;
        return $this;
    }

}
