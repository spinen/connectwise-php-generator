<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagedDevices
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
     * @var ArrayOfManagedDevice $managedDevices
     */
    protected $managedDevices = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param ArrayOfManagedDevice $managedDevices
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $managedDevices = null)
    {
        $this->credentials            = $credentials;
        $this->managementSolutionName = $managementSolutionName;
        $this->managedDevices         = $managedDevices;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedDevices
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedDevices
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return ArrayOfManagedDevice
     */
    public function getManagedDevices()
    {
        return $this->managedDevices;
    }

    /**
     * @param ArrayOfManagedDevice $managedDevices
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedDevices
     */
    public function setManagedDevices($managedDevices)
    {
        $this->managedDevices = $managedDevices;
        return $this;
    }

}
