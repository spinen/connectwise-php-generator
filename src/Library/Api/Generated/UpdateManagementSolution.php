<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagementSolution
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ManagementSolution $managementSolution
     */
    protected $managementSolution = null;

    /**
     * @param ApiCredentials $credentials
     * @param ManagementSolution $managementSolution
     */
    public function __construct(ApiCredentials $credentials = null, ManagementSolution $managementSolution = null)
    {
        $this->credentials        = $credentials;
        $this->managementSolution = $managementSolution;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSolution
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ManagementSolution
     */
    public function getManagementSolution()
    {
        return $this->managementSolution;
    }

    /**
     * @param ManagementSolution $managementSolution
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagementSolution
     */
    public function setManagementSolution(ManagementSolution $managementSolution)
    {
        $this->managementSolution = $managementSolution;
        return $this;
    }

}
