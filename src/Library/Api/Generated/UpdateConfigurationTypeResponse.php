<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateConfigurationTypeResponse
{

    /**
     * @var ConfigurationType $UpdateConfigurationTypeResult
     */
    protected $UpdateConfigurationTypeResult = null;

    /**
     * @param ConfigurationType $UpdateConfigurationTypeResult
     */
    public function __construct(ConfigurationType $UpdateConfigurationTypeResult = null)
    {
        $this->UpdateConfigurationTypeResult = $UpdateConfigurationTypeResult;
    }

    /**
     * @return ConfigurationType
     */
    public function getUpdateConfigurationTypeResult()
    {
        return $this->UpdateConfigurationTypeResult;
    }

    /**
     * @param ConfigurationType $UpdateConfigurationTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateConfigurationTypeResponse
     */
    public function setUpdateConfigurationTypeResult(ConfigurationType $UpdateConfigurationTypeResult)
    {
        $this->UpdateConfigurationTypeResult = $UpdateConfigurationTypeResult;
        return $this;
    }

}
