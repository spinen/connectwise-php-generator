<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectWorkPlan
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $projectId
     */
    protected $projectId = null;

    /**
     * @var ProjectWorkPlan $projectWorkPlan
     */
    protected $projectWorkPlan = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $projectId
     * @param ProjectWorkPlan $projectWorkPlan
     */
    public function __construct(ApiCredentials $credentials = null, $projectId = null, ProjectWorkPlan $projectWorkPlan = null)
    {
        $this->credentials     = $credentials;
        $this->projectId       = $projectId;
        $this->projectWorkPlan = $projectWorkPlan;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectWorkPlan
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectWorkPlan
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return ProjectWorkPlan
     */
    public function getProjectWorkPlan()
    {
        return $this->projectWorkPlan;
    }

    /**
     * @param ProjectWorkPlan $projectWorkPlan
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectWorkPlan
     */
    public function setProjectWorkPlan(ProjectWorkPlan $projectWorkPlan)
    {
        $this->projectWorkPlan = $projectWorkPlan;
        return $this;
    }

}
