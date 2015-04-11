<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementWorkTypeExclusionResponse
{

    /**
     * @var AgreementWorkTypeExclusion $GetAgreementWorkTypeExclusionResult
     */
    protected $GetAgreementWorkTypeExclusionResult = null;

    /**
     * @param AgreementWorkTypeExclusion $GetAgreementWorkTypeExclusionResult
     */
    public function __construct(AgreementWorkTypeExclusion $GetAgreementWorkTypeExclusionResult = null)
    {
        $this->GetAgreementWorkTypeExclusionResult = $GetAgreementWorkTypeExclusionResult;
    }

    /**
     * @return AgreementWorkTypeExclusion
     */
    public function getGetAgreementWorkTypeExclusionResult()
    {
        return $this->GetAgreementWorkTypeExclusionResult;
    }

    /**
     * @param AgreementWorkTypeExclusion $GetAgreementWorkTypeExclusionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementWorkTypeExclusionResponse
     */
    public function setGetAgreementWorkTypeExclusionResult(AgreementWorkTypeExclusion $GetAgreementWorkTypeExclusionResult)
    {
        $this->GetAgreementWorkTypeExclusionResult = $GetAgreementWorkTypeExclusionResult;
        return $this;
    }

}
