<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class IsValidMemberIdAndPasswordResponse
{

    /**
     * @var boolean $IsValidMemberIdAndPasswordResult
     */
    protected $IsValidMemberIdAndPasswordResult = null;

    /**
     * @param boolean $IsValidMemberIdAndPasswordResult
     */
    public function __construct($IsValidMemberIdAndPasswordResult = null)
    {
        $this->IsValidMemberIdAndPasswordResult = $IsValidMemberIdAndPasswordResult;
    }

    /**
     * @return boolean
     */
    public function getIsValidMemberIdAndPasswordResult()
    {
        return $this->IsValidMemberIdAndPasswordResult;
    }

    /**
     * @param boolean $IsValidMemberIdAndPasswordResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\IsValidMemberIdAndPasswordResponse
     */
    public function setIsValidMemberIdAndPasswordResult($IsValidMemberIdAndPasswordResult)
    {
        $this->IsValidMemberIdAndPasswordResult = $IsValidMemberIdAndPasswordResult;
        return $this;
    }

}
