<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindConfigurationCountResponse
{

    /**
     * @var int $FindConfigurationCountResult
     */
    protected $FindConfigurationCountResult = null;

    /**
     * @param int $FindConfigurationCountResult
     */
    public function __construct($FindConfigurationCountResult = null)
    {
        $this->FindConfigurationCountResult = $FindConfigurationCountResult;
    }

    /**
     * @return int
     */
    public function getFindConfigurationCountResult()
    {
        return $this->FindConfigurationCountResult;
    }

    /**
     * @param int $FindConfigurationCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindConfigurationCountResponse
     */
    public function setFindConfigurationCountResult($FindConfigurationCountResult)
    {
        $this->FindConfigurationCountResult = $FindConfigurationCountResult;
        return $this;
    }

}
