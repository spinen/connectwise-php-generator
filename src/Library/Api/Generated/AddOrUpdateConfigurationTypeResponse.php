<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateConfigurationTypeResponse
{

    /**
     * @var ConfigurationType $AddOrUpdateConfigurationTypeResult
     */
    protected $AddOrUpdateConfigurationTypeResult = null;

    /**
     * @param ConfigurationType $AddOrUpdateConfigurationTypeResult
     */
    public function __construct(ConfigurationType $AddOrUpdateConfigurationTypeResult = null)
    {
        $this->AddOrUpdateConfigurationTypeResult = $AddOrUpdateConfigurationTypeResult;
    }

    /**
     * @return ConfigurationType
     */
    public function getAddOrUpdateConfigurationTypeResult()
    {
        return $this->AddOrUpdateConfigurationTypeResult;
    }

    /**
     * @param ConfigurationType $AddOrUpdateConfigurationTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateConfigurationTypeResponse
     */
    public function setAddOrUpdateConfigurationTypeResult(ConfigurationType $AddOrUpdateConfigurationTypeResult)
    {
        $this->AddOrUpdateConfigurationTypeResult = $AddOrUpdateConfigurationTypeResult;
        return $this;
    }

}
