<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrRemoveAgreementWorkTypeExclusionResponse
{

    /**
     * @var ArrayOfAgreementWorkTypeExclusion $AddOrRemoveAgreementWorkTypeExclusionResult
     */
    protected $AddOrRemoveAgreementWorkTypeExclusionResult = null;

    /**
     * @param ArrayOfAgreementWorkTypeExclusion $AddOrRemoveAgreementWorkTypeExclusionResult
     */
    public function __construct($AddOrRemoveAgreementWorkTypeExclusionResult = null)
    {
        $this->AddOrRemoveAgreementWorkTypeExclusionResult = $AddOrRemoveAgreementWorkTypeExclusionResult;
    }

    /**
     * @return ArrayOfAgreementWorkTypeExclusion
     */
    public function getAddOrRemoveAgreementWorkTypeExclusionResult()
    {
        return $this->AddOrRemoveAgreementWorkTypeExclusionResult;
    }

    /**
     * @param ArrayOfAgreementWorkTypeExclusion $AddOrRemoveAgreementWorkTypeExclusionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrRemoveAgreementWorkTypeExclusionResponse
     */
    public function setAddOrRemoveAgreementWorkTypeExclusionResult($AddOrRemoveAgreementWorkTypeExclusionResult)
    {
        $this->AddOrRemoveAgreementWorkTypeExclusionResult = $AddOrRemoveAgreementWorkTypeExclusionResult;
        return $this;
    }

}
