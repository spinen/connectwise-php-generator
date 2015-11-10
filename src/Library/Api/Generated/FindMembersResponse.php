<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindMembersResponse
{

    /**
     * @var ArrayOfMemberFindResult $FindMembersResult
     */
    protected $FindMembersResult = null;

    /**
     * @param ArrayOfMemberFindResult $FindMembersResult
     */
    public function __construct($FindMembersResult = null)
    {
        $this->FindMembersResult = $FindMembersResult;
    }

    /**
     * @return ArrayOfMemberFindResult
     */
    public function getFindMembersResult()
    {
        return $this->FindMembersResult;
    }

    /**
     * @param ArrayOfMemberFindResult $FindMembersResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindMembersResponse
     */
    public function setFindMembersResult($FindMembersResult)
    {
        $this->FindMembersResult = $FindMembersResult;
        return $this;
    }

}
