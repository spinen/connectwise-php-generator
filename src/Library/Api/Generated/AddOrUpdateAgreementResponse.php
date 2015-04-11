<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementResponse
{

    /**
     * @var Agreement $AddOrUpdateAgreementResult
     */
    protected $AddOrUpdateAgreementResult = null;

    /**
     * @param Agreement $AddOrUpdateAgreementResult
     */
    public function __construct(Agreement $AddOrUpdateAgreementResult = null)
    {
        $this->AddOrUpdateAgreementResult = $AddOrUpdateAgreementResult;
    }

    /**
     * @return Agreement
     */
    public function getAddOrUpdateAgreementResult()
    {
        return $this->AddOrUpdateAgreementResult;
    }

    /**
     * @param Agreement $AddOrUpdateAgreementResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementResponse
     */
    public function setAddOrUpdateAgreementResult(Agreement $AddOrUpdateAgreementResult)
    {
        $this->AddOrUpdateAgreementResult = $AddOrUpdateAgreementResult;
        return $this;
    }

}
