<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfConfigurationTypeFindResult
{

    /**
     * @var ConfigurationTypeFindResult[] $ConfigurationTypeFindResult
     */
    protected $ConfigurationTypeFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ConfigurationTypeFindResult[]
     */
    public function getConfigurationTypeFindResult()
    {
        return $this->ConfigurationTypeFindResult;
    }

    /**
     * @param ConfigurationTypeFindResult[] $ConfigurationTypeFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfConfigurationTypeFindResult
     */
    public function setConfigurationTypeFindResult(array $ConfigurationTypeFindResult = null)
    {
        $this->ConfigurationTypeFindResult = $ConfigurationTypeFindResult;
        return $this;
    }

}
