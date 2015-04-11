<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementResponse
{

    /**
     * @var Agreement $GetAgreementResult
     */
    protected $GetAgreementResult = null;

    /**
     * @param Agreement $GetAgreementResult
     */
    public function __construct(Agreement $GetAgreementResult = null)
    {
        $this->GetAgreementResult = $GetAgreementResult;
    }

    /**
     * @return Agreement
     */
    public function getGetAgreementResult()
    {
        return $this->GetAgreementResult;
    }

    /**
     * @param Agreement $GetAgreementResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementResponse
     */
    public function setGetAgreementResult(Agreement $GetAgreementResult)
    {
        $this->GetAgreementResult = $GetAgreementResult;
        return $this;
    }

}
