<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetConfigurationTypeResponse
{

    /**
     * @var ConfigurationType $GetConfigurationTypeResult
     */
    protected $GetConfigurationTypeResult = null;

    /**
     * @param ConfigurationType $GetConfigurationTypeResult
     */
    public function __construct(ConfigurationType $GetConfigurationTypeResult = null)
    {
        $this->GetConfigurationTypeResult = $GetConfigurationTypeResult;
    }

    /**
     * @return ConfigurationType
     */
    public function getGetConfigurationTypeResult()
    {
        return $this->GetConfigurationTypeResult;
    }

    /**
     * @param ConfigurationType $GetConfigurationTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetConfigurationTypeResponse
     */
    public function setGetConfigurationTypeResult(ConfigurationType $GetConfigurationTypeResult)
    {
        $this->GetConfigurationTypeResult = $GetConfigurationTypeResult;
        return $this;
    }

}
