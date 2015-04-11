<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetConnectWiseVersionInfo
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @param ApiCredentials $credentials
     */
    public function __construct(ApiCredentials $credentials = null)
    {
        $this->credentials = $credentials;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetConnectWiseVersionInfo
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

}
