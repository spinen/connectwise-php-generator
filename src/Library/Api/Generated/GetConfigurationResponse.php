<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetConfigurationResponse
{

    /**
     * @var Configuration $GetConfigurationResult
     */
    protected $GetConfigurationResult = null;

    /**
     * @param Configuration $GetConfigurationResult
     */
    public function __construct(Configuration $GetConfigurationResult = null)
    {
        $this->GetConfigurationResult = $GetConfigurationResult;
    }

    /**
     * @return Configuration
     */
    public function getGetConfigurationResult()
    {
        return $this->GetConfigurationResult;
    }

    /**
     * @param Configuration $GetConfigurationResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetConfigurationResponse
     */
    public function setGetConfigurationResult(Configuration $GetConfigurationResult)
    {
        $this->GetConfigurationResult = $GetConfigurationResult;
        return $this;
    }

}
