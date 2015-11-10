<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagedServers
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
     * @var ArrayOfManagedServersData $managedServersData
     */
    protected $managedServersData = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param ArrayOfManagedServersData $managedServersData
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $managedServersData = null)
    {
        $this->credentials            = $credentials;
        $this->managementSolutionName = $managementSolutionName;
        $this->managedServersData     = $managedServersData;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedServers
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedServers
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return ArrayOfManagedServersData
     */
    public function getManagedServersData()
    {
        return $this->managedServersData;
    }

    /**
     * @param ArrayOfManagedServersData $managedServersData
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedServers
     */
    public function setManagedServersData($managedServersData)
    {
        $this->managedServersData = $managedServersData;
        return $this;
    }

}
