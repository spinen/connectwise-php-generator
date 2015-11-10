<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadConfigurationTypeResponse
{

    /**
     * @var ConfigurationType $LoadConfigurationTypeResult
     */
    protected $LoadConfigurationTypeResult = null;

    /**
     * @param ConfigurationType $LoadConfigurationTypeResult
     */
    public function __construct(ConfigurationType $LoadConfigurationTypeResult = null)
    {
        $this->LoadConfigurationTypeResult = $LoadConfigurationTypeResult;
    }

    /**
     * @return ConfigurationType
     */
    public function getLoadConfigurationTypeResult()
    {
        return $this->LoadConfigurationTypeResult;
    }

    /**
     * @param ConfigurationType $LoadConfigurationTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadConfigurationTypeResponse
     */
    public function setLoadConfigurationTypeResult(ConfigurationType $LoadConfigurationTypeResult)
    {
        $this->LoadConfigurationTypeResult = $LoadConfigurationTypeResult;
        return $this;
    }

}
