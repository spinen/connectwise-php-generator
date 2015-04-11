<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementWorkTypeResponse
{

    /**
     * @var AgreementWorkType $AddOrUpdateAgreementWorkTypeResult
     */
    protected $AddOrUpdateAgreementWorkTypeResult = null;

    /**
     * @param AgreementWorkType $AddOrUpdateAgreementWorkTypeResult
     */
    public function __construct(AgreementWorkType $AddOrUpdateAgreementWorkTypeResult = null)
    {
        $this->AddOrUpdateAgreementWorkTypeResult = $AddOrUpdateAgreementWorkTypeResult;
    }

    /**
     * @return AgreementWorkType
     */
    public function getAddOrUpdateAgreementWorkTypeResult()
    {
        return $this->AddOrUpdateAgreementWorkTypeResult;
    }

    /**
     * @param AgreementWorkType $AddOrUpdateAgreementWorkTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementWorkTypeResponse
     */
    public function setAddOrUpdateAgreementWorkTypeResult(AgreementWorkType $AddOrUpdateAgreementWorkTypeResult)
    {
        $this->AddOrUpdateAgreementWorkTypeResult = $AddOrUpdateAgreementWorkTypeResult;
        return $this;
    }

}
