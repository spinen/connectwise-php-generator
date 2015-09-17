<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfConfigurationFindResult
{

    /**
     * @var ConfigurationFindResult[] $ConfigurationFindResult
     */
    protected $ConfigurationFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ConfigurationFindResult[]
     */
    public function getConfigurationFindResult()
    {
        return $this->ConfigurationFindResult;
    }

    /**
     * @param ConfigurationFindResult[] $ConfigurationFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfConfigurationFindResult
     */
    public function setConfigurationFindResult(array $ConfigurationFindResult = null)
    {
        $this->ConfigurationFindResult = $ConfigurationFindResult;
        return $this;
    }

}
