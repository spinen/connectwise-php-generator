<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateConfigurationResponse
{

    /**
     * @var Configuration $AddOrUpdateConfigurationResult
     */
    protected $AddOrUpdateConfigurationResult = null;

    /**
     * @param Configuration $AddOrUpdateConfigurationResult
     */
    public function __construct(Configuration $AddOrUpdateConfigurationResult = null)
    {
        $this->AddOrUpdateConfigurationResult = $AddOrUpdateConfigurationResult;
    }

    /**
     * @return Configuration
     */
    public function getAddOrUpdateConfigurationResult()
    {
        return $this->AddOrUpdateConfigurationResult;
    }

    /**
     * @param Configuration $AddOrUpdateConfigurationResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateConfigurationResponse
     */
    public function setAddOrUpdateConfigurationResult(Configuration $AddOrUpdateConfigurationResult)
    {
        $this->AddOrUpdateConfigurationResult = $AddOrUpdateConfigurationResult;
        return $this;
    }

}
