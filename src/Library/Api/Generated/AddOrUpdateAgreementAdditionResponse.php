<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementAdditionResponse
{

    /**
     * @var AgreementAddition $AddOrUpdateAgreementAdditionResult
     */
    protected $AddOrUpdateAgreementAdditionResult = null;

    /**
     * @param AgreementAddition $AddOrUpdateAgreementAdditionResult
     */
    public function __construct(AgreementAddition $AddOrUpdateAgreementAdditionResult = null)
    {
        $this->AddOrUpdateAgreementAdditionResult = $AddOrUpdateAgreementAdditionResult;
    }

    /**
     * @return AgreementAddition
     */
    public function getAddOrUpdateAgreementAdditionResult()
    {
        return $this->AddOrUpdateAgreementAdditionResult;
    }

    /**
     * @param AgreementAddition $AddOrUpdateAgreementAdditionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementAdditionResponse
     */
    public function setAddOrUpdateAgreementAdditionResult(AgreementAddition $AddOrUpdateAgreementAdditionResult)
    {
        $this->AddOrUpdateAgreementAdditionResult = $AddOrUpdateAgreementAdditionResult;
        return $this;
    }

}
