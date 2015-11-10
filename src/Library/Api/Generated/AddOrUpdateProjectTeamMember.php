<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectTeamMember
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProjectTeamMember $projectTeamMember
     */
    protected $projectTeamMember = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProjectTeamMember $projectTeamMember
     */
    public function __construct(ApiCredentials $credentials = null, ProjectTeamMember $projectTeamMember = null)
    {
        $this->credentials       = $credentials;
        $this->projectTeamMember = $projectTeamMember;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectTeamMember
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProjectTeamMember
     */
    public function getProjectTeamMember()
    {
        return $this->projectTeamMember;
    }

    /**
     * @param ProjectTeamMember $projectTeamMember
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectTeamMember
     */
    public function setProjectTeamMember(ProjectTeamMember $projectTeamMember)
    {
        $this->projectTeamMember = $projectTeamMember;
        return $this;
    }

}
