<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindConfigurationTypesResponse
{

    /**
     * @var ArrayOfConfigurationTypeFindResult $FindConfigurationTypesResult
     */
    protected $FindConfigurationTypesResult = null;

    /**
     * @param ArrayOfConfigurationTypeFindResult $FindConfigurationTypesResult
     */
    public function __construct($FindConfigurationTypesResult = null)
    {
        $this->FindConfigurationTypesResult = $FindConfigurationTypesResult;
    }

    /**
     * @return ArrayOfConfigurationTypeFindResult
     */
    public function getFindConfigurationTypesResult()
    {
        return $this->FindConfigurationTypesResult;
    }

    /**
     * @param ArrayOfConfigurationTypeFindResult $FindConfigurationTypesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindConfigurationTypesResponse
     */
    public function setFindConfigurationTypesResult($FindConfigurationTypesResult)
    {
        $this->FindConfigurationTypesResult = $FindConfigurationTypesResult;
        return $this;
    }

}
