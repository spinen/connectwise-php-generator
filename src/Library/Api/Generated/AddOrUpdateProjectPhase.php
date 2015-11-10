<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectPhase
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProjectPhase $projectPhase
     */
    protected $projectPhase = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProjectPhase $projectPhase
     */
    public function __construct(ApiCredentials $credentials = null, ProjectPhase $projectPhase = null)
    {
        $this->credentials  = $credentials;
        $this->projectPhase = $projectPhase;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectPhase
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProjectPhase
     */
    public function getProjectPhase()
    {
        return $this->projectPhase;
    }

    /**
     * @param ProjectPhase $projectPhase
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectPhase
     */
    public function setProjectPhase(ProjectPhase $projectPhase)
    {
        $this->projectPhase = $projectPhase;
        return $this;
    }

}
