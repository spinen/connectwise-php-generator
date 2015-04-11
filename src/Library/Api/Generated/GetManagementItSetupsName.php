<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagementItSetupsName
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
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null)
    {
        $this->credentials            = $credentials;
        $this->managementSolutionName = $managementSolutionName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagementItSetupsName
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagementItSetupsName
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

}
