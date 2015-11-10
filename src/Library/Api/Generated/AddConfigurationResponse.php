<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddConfigurationResponse
{

    /**
     * @var Configuration $AddConfigurationResult
     */
    protected $AddConfigurationResult = null;

    /**
     * @param Configuration $AddConfigurationResult
     */
    public function __construct(Configuration $AddConfigurationResult = null)
    {
        $this->AddConfigurationResult = $AddConfigurationResult;
    }

    /**
     * @return Configuration
     */
    public function getAddConfigurationResult()
    {
        return $this->AddConfigurationResult;
    }

    /**
     * @param Configuration $AddConfigurationResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddConfigurationResponse
     */
    public function setAddConfigurationResult(Configuration $AddConfigurationResult)
    {
        $this->AddConfigurationResult = $AddConfigurationResult;
        return $this;
    }

}
