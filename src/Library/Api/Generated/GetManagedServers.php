<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagedServers
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
     * @var string $groupId
     */
    protected $groupId = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $managementSolutionName
     * @param string $groupId
     */
    public function __construct(ApiCredentials $credentials = null, $managementSolutionName = null, $groupId = null)
    {
        $this->credentials            = $credentials;
        $this->managementSolutionName = $managementSolutionName;
        $this->groupId                = $groupId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedServers
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedServers
     */
    public function setManagementSolutionName($managementSolutionName)
    {
        $this->managementSolutionName = $managementSolutionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagedServers
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

}
