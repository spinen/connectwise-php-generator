<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddConfigurationTypeResponse
{

    /**
     * @var ConfigurationType $AddConfigurationTypeResult
     */
    protected $AddConfigurationTypeResult = null;

    /**
     * @param ConfigurationType $AddConfigurationTypeResult
     */
    public function __construct(ConfigurationType $AddConfigurationTypeResult = null)
    {
        $this->AddConfigurationTypeResult = $AddConfigurationTypeResult;
    }

    /**
     * @return ConfigurationType
     */
    public function getAddConfigurationTypeResult()
    {
        return $this->AddConfigurationTypeResult;
    }

    /**
     * @param ConfigurationType $AddConfigurationTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddConfigurationTypeResponse
     */
    public function setAddConfigurationTypeResult(ConfigurationType $AddConfigurationTypeResult)
    {
        $this->AddConfigurationTypeResult = $AddConfigurationTypeResult;
        return $this;
    }

}
