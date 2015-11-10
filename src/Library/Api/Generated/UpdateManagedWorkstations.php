<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagedWorkstations
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
     * @var ArrayOfManagedWorkstationsData $managedWorkstationsData
     */
    protected $managedWorkstationsData = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param ArrayOfManagedWorkstationsData $managedWorkstationsData
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $managedWorkstationsData = null)
    {
        $this->credentials             = $credentials;
        $this->managementSolutionName  = $managementSolutionName;
        $this->managedWorkstationsData = $managedWorkstationsData;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedWorkstations
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedWorkstations
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return ArrayOfManagedWorkstationsData
     */
    public function getManagedWorkstationsData()
    {
        return $this->managedWorkstationsData;
    }

    /**
     * @param ArrayOfManagedWorkstationsData $managedWorkstationsData
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedWorkstations
     */
    public function setManagedWorkstationsData($managedWorkstationsData)
    {
        $this->managedWorkstationsData = $managedWorkstationsData;
        return $this;
    }

}
