<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectTeamMemberResponse
{

    /**
     * @var ProjectTeamMember $GetProjectTeamMemberResult
     */
    protected $GetProjectTeamMemberResult = null;

    /**
     * @param ProjectTeamMember $GetProjectTeamMemberResult
     */
    public function __construct(ProjectTeamMember $GetProjectTeamMemberResult = null)
    {
        $this->GetProjectTeamMemberResult = $GetProjectTeamMemberResult;
    }

    /**
     * @return ProjectTeamMember
     */
    public function getGetProjectTeamMemberResult()
    {
        return $this->GetProjectTeamMemberResult;
    }

    /**
     * @param ProjectTeamMember $GetProjectTeamMemberResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectTeamMemberResponse
     */
    public function setGetProjectTeamMemberResult(ProjectTeamMember $GetProjectTeamMemberResult)
    {
        $this->GetProjectTeamMemberResult = $GetProjectTeamMemberResult;
        return $this;
    }

}
