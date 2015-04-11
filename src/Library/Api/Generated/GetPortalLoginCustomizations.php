<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPortalLoginCustomizations
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $portalName
     */
    protected $portalName = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $portalName
     */
    public function __construct(ApiCredentials $credentials = null, $portalName = null)
    {
        $this->credentials = $credentials;
        $this->portalName  = $portalName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalLoginCustomizations
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalLoginCustomizations
     */
    public function setPortalName($portalName)
    {
        $this->portalName = $portalName;
        return $this;
    }

}
