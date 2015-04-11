<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagedGroup
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
     * @var string $managementItSetupName
     */
    protected $managementItSetupName = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param string $managementItSetupName
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $managementItSetupName = null)
    {
        $this->credentials            = $credentials;
        $this->managementSolutionName = $managementSolutionName;
        $this->managementItSetupName  = $managementItSetupName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedGroup
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedGroup
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getManagementItSetupName()
    {
        return $this->managementItSetupName;
    }

    /**
     * @param string $managementItSetupName
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedGroup
     */
    public function setManagementItSetupName($managementItSetupName)
    {
        $this->managementItSetupName = $managementItSetupName;
        return $this;
    }

}
