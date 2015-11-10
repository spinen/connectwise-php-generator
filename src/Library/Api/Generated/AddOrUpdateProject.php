<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProject
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Project $project
     */
    protected $project = null;

    /**
     * @param ApiCredentials $credentials
     * @param Project $project
     */
    public function __construct(ApiCredentials $credentials = null, Project $project = null)
    {
        $this->credentials = $credentials;
        $this->project     = $project;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProject
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param Project $project
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProject
     */
    public function setProject(Project $project)
    {
        $this->project = $project;
        return $this;
    }

}
