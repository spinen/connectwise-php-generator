<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddConfiguration
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Configuration $configuration
     */
    protected $configuration = null;

    /**
     * @param ApiCredentials $credentials
     * @param Configuration $configuration
     */
    public function __construct(ApiCredentials $credentials = null, Configuration $configuration = null)
    {
        $this->credentials   = $credentials;
        $this->configuration = $configuration;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddConfiguration
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param Configuration $configuration
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddConfiguration
     */
    public function setConfiguration(Configuration $configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

}
