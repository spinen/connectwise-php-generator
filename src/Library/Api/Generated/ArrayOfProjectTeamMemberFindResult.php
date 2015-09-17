<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectTeamMemberFindResult
{

    /**
     * @var ProjectTeamMemberFindResult[] $ProjectTeamMemberFindResult
     */
    protected $ProjectTeamMemberFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectTeamMemberFindResult[]
     */
    public function getProjectTeamMemberFindResult()
    {
        return $this->ProjectTeamMemberFindResult;
    }

    /**
     * @param ProjectTeamMemberFindResult[] $ProjectTeamMemberFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectTeamMemberFindResult
     */
    public function setProjectTeamMemberFindResult(array $ProjectTeamMemberFindResult = null)
    {
        $this->ProjectTeamMemberFindResult = $ProjectTeamMemberFindResult;
        return $this;
    }

}
