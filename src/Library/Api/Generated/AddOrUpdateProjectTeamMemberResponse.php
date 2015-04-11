<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectTeamMemberResponse
{

    /**
     * @var ProjectTeamMember $AddOrUpdateProjectTeamMemberResult
     */
    protected $AddOrUpdateProjectTeamMemberResult = null;

    /**
     * @param ProjectTeamMember $AddOrUpdateProjectTeamMemberResult
     */
    public function __construct(ProjectTeamMember $AddOrUpdateProjectTeamMemberResult = null)
    {
        $this->AddOrUpdateProjectTeamMemberResult = $AddOrUpdateProjectTeamMemberResult;
    }

    /**
     * @return ProjectTeamMember
     */
    public function getAddOrUpdateProjectTeamMemberResult()
    {
        return $this->AddOrUpdateProjectTeamMemberResult;
    }

    /**
     * @param ProjectTeamMember $AddOrUpdateProjectTeamMemberResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectTeamMemberResponse
     */
    public function setAddOrUpdateProjectTeamMemberResult(ProjectTeamMember $AddOrUpdateProjectTeamMemberResult)
    {
        $this->AddOrUpdateProjectTeamMemberResult = $AddOrUpdateProjectTeamMemberResult;
        return $this;
    }

}
