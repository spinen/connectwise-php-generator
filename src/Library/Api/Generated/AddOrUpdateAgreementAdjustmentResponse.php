<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementAdjustmentResponse
{

    /**
     * @var AgreementAdjustment $AddOrUpdateAgreementAdjustmentResult
     */
    protected $AddOrUpdateAgreementAdjustmentResult = null;

    /**
     * @param AgreementAdjustment $AddOrUpdateAgreementAdjustmentResult
     */
    public function __construct(AgreementAdjustment $AddOrUpdateAgreementAdjustmentResult = null)
    {
        $this->AddOrUpdateAgreementAdjustmentResult = $AddOrUpdateAgreementAdjustmentResult;
    }

    /**
     * @return AgreementAdjustment
     */
    public function getAddOrUpdateAgreementAdjustmentResult()
    {
        return $this->AddOrUpdateAgreementAdjustmentResult;
    }

    /**
     * @param AgreementAdjustment $AddOrUpdateAgreementAdjustmentResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementAdjustmentResponse
     */
    public function setAddOrUpdateAgreementAdjustmentResult(AgreementAdjustment $AddOrUpdateAgreementAdjustmentResult)
    {
        $this->AddOrUpdateAgreementAdjustmentResult = $AddOrUpdateAgreementAdjustmentResult;
        return $this;
    }

}
