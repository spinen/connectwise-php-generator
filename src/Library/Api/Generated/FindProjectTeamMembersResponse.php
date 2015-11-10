<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProjectTeamMembersResponse
{

    /**
     * @var ArrayOfProjectTeamMemberFindResult $FindProjectTeamMembersResult
     */
    protected $FindProjectTeamMembersResult = null;

    /**
     * @param ArrayOfProjectTeamMemberFindResult $FindProjectTeamMembersResult
     */
    public function __construct($FindProjectTeamMembersResult = null)
    {
        $this->FindProjectTeamMembersResult = $FindProjectTeamMembersResult;
    }

    /**
     * @return ArrayOfProjectTeamMemberFindResult
     */
    public function getFindProjectTeamMembersResult()
    {
        return $this->FindProjectTeamMembersResult;
    }

    /**
     * @param ArrayOfProjectTeamMemberFindResult $FindProjectTeamMembersResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProjectTeamMembersResponse
     */
    public function setFindProjectTeamMembersResult($FindProjectTeamMembersResult)
    {
        $this->FindProjectTeamMembersResult = $FindProjectTeamMembersResult;
        return $this;
    }

}
