<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementWorkTypeResponse
{

    /**
     * @var AgreementWorkType $GetAgreementWorkTypeResult
     */
    protected $GetAgreementWorkTypeResult = null;

    /**
     * @param AgreementWorkType $GetAgreementWorkTypeResult
     */
    public function __construct(AgreementWorkType $GetAgreementWorkTypeResult = null)
    {
        $this->GetAgreementWorkTypeResult = $GetAgreementWorkTypeResult;
    }

    /**
     * @return AgreementWorkType
     */
    public function getGetAgreementWorkTypeResult()
    {
        return $this->GetAgreementWorkTypeResult;
    }

    /**
     * @param AgreementWorkType $GetAgreementWorkTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementWorkTypeResponse
     */
    public function setGetAgreementWorkTypeResult(AgreementWorkType $GetAgreementWorkTypeResult)
    {
        $this->GetAgreementWorkTypeResult = $GetAgreementWorkTypeResult;
        return $this;
    }

}
