<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfMemberFindResult
{

    /**
     * @var MemberFindResult[] $MemberFindResult
     */
    protected $MemberFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return MemberFindResult[]
     */
    public function getMemberFindResult()
    {
        return $this->MemberFindResult;
    }

    /**
     * @param MemberFindResult[] $MemberFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfMemberFindResult
     */
    public function setMemberFindResult(array $MemberFindResult = null)
    {
        $this->MemberFindResult = $MemberFindResult;
        return $this;
    }

}
