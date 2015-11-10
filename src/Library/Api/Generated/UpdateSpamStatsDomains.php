<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateSpamStatsDomains
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $managementSolutionName
     */
    protected $managementSolutionName = null;

    /**
     * @var ArrayOfSpamStatsDomainData $spamStatsDomainData
     */
    protected $spamStatsDomainData = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param ArrayOfSpamStatsDomainData $spamStatsDomainData
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $spamStatsDomainData = null)
    {
        $this->credentials            = $credentials;
        $this->managementSolutionName = $managementSolutionName;
        $this->spamStatsDomainData    = $spamStatsDomainData;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateSpamStatsDomains
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagementSolutionName()
    {
        return $this->managementSolutionName;
    }

    /**
     * @param string $managementSolutionName
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateSpamStatsDomains
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return ArrayOfSpamStatsDomainData
     */
    public function getSpamStatsDomainData()
    {
        return $this->spamStatsDomainData;
    }

    /**
     * @param ArrayOfSpamStatsDomainData $spamStatsDomainData
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateSpamStatsDomains
     */
    public function setSpamStatsDomainData($spamStatsDomainData)
    {
        $this->spamStatsDomainData = $spamStatsDomainData;
        return $this;
    }

}
