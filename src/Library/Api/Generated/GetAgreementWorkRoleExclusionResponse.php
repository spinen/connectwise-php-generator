<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementWorkRoleExclusionResponse
{

    /**
     * @var AgreementWorkRoleExclusion $GetAgreementWorkRoleExclusionResult
     */
    protected $GetAgreementWorkRoleExclusionResult = null;

    /**
     * @param AgreementWorkRoleExclusion $GetAgreementWorkRoleExclusionResult
     */
    public function __construct(AgreementWorkRoleExclusion $GetAgreementWorkRoleExclusionResult = null)
    {
        $this->GetAgreementWorkRoleExclusionResult = $GetAgreementWorkRoleExclusionResult;
    }

    /**
     * @return AgreementWorkRoleExclusion
     */
    public function getGetAgreementWorkRoleExclusionResult()
    {
        return $this->GetAgreementWorkRoleExclusionResult;
    }

    /**
     * @param AgreementWorkRoleExclusion $GetAgreementWorkRoleExclusionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementWorkRoleExclusionResponse
     */
    public function setGetAgreementWorkRoleExclusionResult(AgreementWorkRoleExclusion $GetAgreementWorkRoleExclusionResult)
    {
        $this->GetAgreementWorkRoleExclusionResult = $GetAgreementWorkRoleExclusionResult;
        return $this;
    }

}
