<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrRemoveAgreementWorkRoleExclusionResponse
{

    /**
     * @var ArrayOfAgreementWorkRoleExclusion $AddOrRemoveAgreementWorkRoleExclusionResult
     */
    protected $AddOrRemoveAgreementWorkRoleExclusionResult = null;

    /**
     * @param ArrayOfAgreementWorkRoleExclusion $AddOrRemoveAgreementWorkRoleExclusionResult
     */
    public function __construct($AddOrRemoveAgreementWorkRoleExclusionResult = null)
    {
        $this->AddOrRemoveAgreementWorkRoleExclusionResult = $AddOrRemoveAgreementWorkRoleExclusionResult;
    }

    /**
     * @return ArrayOfAgreementWorkRoleExclusion
     */
    public function getAddOrRemoveAgreementWorkRoleExclusionResult()
    {
        return $this->AddOrRemoveAgreementWorkRoleExclusionResult;
    }

    /**
     * @param ArrayOfAgreementWorkRoleExclusion $AddOrRemoveAgreementWorkRoleExclusionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrRemoveAgreementWorkRoleExclusionResponse
     */
    public function setAddOrRemoveAgreementWorkRoleExclusionResult($AddOrRemoveAgreementWorkRoleExclusionResult)
    {
        $this->AddOrRemoveAgreementWorkRoleExclusionResult = $AddOrRemoveAgreementWorkRoleExclusionResult;
        return $this;
    }

}
