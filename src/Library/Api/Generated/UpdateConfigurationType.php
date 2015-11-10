<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateConfigurationType
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ConfigurationType $configurationType
     */
    protected $configurationType = null;

    /**
     * @param ApiCredentials $credentials
     * @param ConfigurationType $configurationType
     */
    public function __construct(ApiCredentials $credentials = null, ConfigurationType $configurationType = null)
    {
        $this->credentials       = $credentials;
        $this->configurationType = $configurationType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateConfigurationType
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ConfigurationType
     */
    public function getConfigurationType()
    {
        return $this->configurationType;
    }

    /**
     * @param ConfigurationType $configurationType
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateConfigurationType
     */
    public function setConfigurationType(ConfigurationType $configurationType)
    {
        $this->configurationType = $configurationType;
        return $this;
    }

}
