<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementAdditionResponse
{

    /**
     * @var AgreementAddition $GetAgreementAdditionResult
     */
    protected $GetAgreementAdditionResult = null;

    /**
     * @param AgreementAddition $GetAgreementAdditionResult
     */
    public function __construct(AgreementAddition $GetAgreementAdditionResult = null)
    {
        $this->GetAgreementAdditionResult = $GetAgreementAdditionResult;
    }

    /**
     * @return AgreementAddition
     */
    public function getGetAgreementAdditionResult()
    {
        return $this->GetAgreementAdditionResult;
    }

    /**
     * @param AgreementAddition $GetAgreementAdditionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementAdditionResponse
     */
    public function setGetAgreementAdditionResult(AgreementAddition $GetAgreementAdditionResult)
    {
        $this->GetAgreementAdditionResult = $GetAgreementAdditionResult;
        return $this;
    }

}
