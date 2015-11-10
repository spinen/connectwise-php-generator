<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementAdjustmentResponse
{

    /**
     * @var AgreementAdjustment $GetAgreementAdjustmentResult
     */
    protected $GetAgreementAdjustmentResult = null;

    /**
     * @param AgreementAdjustment $GetAgreementAdjustmentResult
     */
    public function __construct(AgreementAdjustment $GetAgreementAdjustmentResult = null)
    {
        $this->GetAgreementAdjustmentResult = $GetAgreementAdjustmentResult;
    }

    /**
     * @return AgreementAdjustment
     */
    public function getGetAgreementAdjustmentResult()
    {
        return $this->GetAgreementAdjustmentResult;
    }

    /**
     * @param AgreementAdjustment $GetAgreementAdjustmentResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementAdjustmentResponse
     */
    public function setGetAgreementAdjustmentResult(AgreementAdjustment $GetAgreementAdjustmentResult)
    {
        $this->GetAgreementAdjustmentResult = $GetAgreementAdjustmentResult;
        return $this;
    }

}
