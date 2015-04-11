<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindConfigurationsResponse
{

    /**
     * @var ArrayOfConfigurationFindResult $FindConfigurationsResult
     */
    protected $FindConfigurationsResult = null;

    /**
     * @param ArrayOfConfigurationFindResult $FindConfigurationsResult
     */
    public function __construct($FindConfigurationsResult = null)
    {
        $this->FindConfigurationsResult = $FindConfigurationsResult;
    }

    /**
     * @return ArrayOfConfigurationFindResult
     */
    public function getFindConfigurationsResult()
    {
        return $this->FindConfigurationsResult;
    }

    /**
     * @param ArrayOfConfigurationFindResult $FindConfigurationsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindConfigurationsResponse
     */
    public function setFindConfigurationsResult($FindConfigurationsResult)
    {
        $this->FindConfigurationsResult = $FindConfigurationsResult;
        return $this;
    }

}
