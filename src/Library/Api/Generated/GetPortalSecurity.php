<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPortalSecurity
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $portalContactId
     */
    protected $portalContactId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $portalContactId
     */
    public function __construct(ApiCredentials $credentials = null, $portalContactId = null)
    {
        $this->credentials     = $credentials;
        $this->portalContactId = $portalContactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalSecurity
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getPortalContactId()
    {
        return $this->portalContactId;
    }

    /**
     * @param int $portalContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalSecurity
     */
    public function setPortalContactId($portalContactId)
    {
        $this->portalContactId = $portalContactId;
        return $this;
    }

}
