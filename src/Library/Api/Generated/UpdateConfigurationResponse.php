<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateConfigurationResponse
{

    /**
     * @var Configuration $UpdateConfigurationResult
     */
    protected $UpdateConfigurationResult = null;

    /**
     * @param Configuration $UpdateConfigurationResult
     */
    public function __construct(Configuration $UpdateConfigurationResult = null)
    {
        $this->UpdateConfigurationResult = $UpdateConfigurationResult;
    }

    /**
     * @return Configuration
     */
    public function getUpdateConfigurationResult()
    {
        return $this->UpdateConfigurationResult;
    }

    /**
     * @param Configuration $UpdateConfigurationResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateConfigurationResponse
     */
    public function setUpdateConfigurationResult(Configuration $UpdateConfigurationResult)
    {
        $this->UpdateConfigurationResult = $UpdateConfigurationResult;
        return $this;
    }

}
