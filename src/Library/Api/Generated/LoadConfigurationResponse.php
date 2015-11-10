<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadConfigurationResponse
{

    /**
     * @var Configuration $LoadConfigurationResult
     */
    protected $LoadConfigurationResult = null;

    /**
     * @param Configuration $LoadConfigurationResult
     */
    public function __construct(Configuration $LoadConfigurationResult = null)
    {
        $this->LoadConfigurationResult = $LoadConfigurationResult;
    }

    /**
     * @return Configuration
     */
    public function getLoadConfigurationResult()
    {
        return $this->LoadConfigurationResult;
    }

    /**
     * @param Configuration $LoadConfigurationResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadConfigurationResponse
     */
    public function setLoadConfigurationResult(Configuration $LoadConfigurationResult)
    {
        $this->LoadConfigurationResult = $LoadConfigurationResult;
        return $this;
    }

}
