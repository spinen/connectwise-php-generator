<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Authenticate
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $loginpw
     */
    protected $loginpw = null;

    /**
     * @var string $machineId
     */
    protected $machineId = null;

    /**
     * @var string $portalName
     */
    protected $portalName = null;

    /**
     * @var int $contactId
     */
    protected $contactId = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $email
     * @param string $loginpw
     * @param string $machineId
     * @param string $portalName
     * @param int $contactId
     */
    public function __construct(ApiCredentials $credentials = null, $email = null, $loginpw = null, $machineId = null, $portalName = null, $contactId = null)
    {
        $this->credentials = $credentials;
        $this->email       = $email;
        $this->loginpw     = $loginpw;
        $this->machineId   = $machineId;
        $this->portalName  = $portalName;
        $this->contactId   = $contactId;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\Authenticate
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return \Spinen\ConnectWise\Library\Api\Generated\Authenticate
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getLoginpw()
    {
        return $this->loginpw;
    }

    /**
     * @param string $loginpw
     * @return \Spinen\ConnectWise\Library\Api\Generated\Authenticate
     */
    public function setLoginpw($loginpw)
    {
        $this->loginpw = $loginpw;
        return $this;
    }

    /**
     * @return string
     */
    public function getMachineId()
    {
        return $this->machineId;
    }

    /**
     * @param string $machineId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Authenticate
     */
    public function setMachineId($machineId)
    {
        $this->machineId = $machineId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPortalName()
    {
        return $this->portalName;
    }

    /**
     * @param string $portalName
     * @return \Spinen\ConnectWise\Library\Api\Generated\Authenticate
     */
    public function setPortalName($portalName)
    {
        $this->portalName = $portalName;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int $contactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Authenticate
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

}
