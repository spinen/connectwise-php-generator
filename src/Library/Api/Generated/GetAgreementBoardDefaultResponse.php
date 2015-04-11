<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementBoardDefaultResponse
{

    /**
     * @var AgreementBoardDefault $GetAgreementBoardDefaultResult
     */
    protected $GetAgreementBoardDefaultResult = null;

    /**
     * @param AgreementBoardDefault $GetAgreementBoardDefaultResult
     */
    public function __construct(AgreementBoardDefault $GetAgreementBoardDefaultResult = null)
    {
        $this->GetAgreementBoardDefaultResult = $GetAgreementBoardDefaultResult;
    }

    /**
     * @return AgreementBoardDefault
     */
    public function getGetAgreementBoardDefaultResult()
    {
        return $this->GetAgreementBoardDefaultResult;
    }

    /**
     * @param AgreementBoardDefault $GetAgreementBoardDefaultResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementBoardDefaultResponse
     */
    public function setGetAgreementBoardDefaultResult(AgreementBoardDefault $GetAgreementBoardDefaultResult)
    {
        $this->GetAgreementBoardDefaultResult = $GetAgreementBoardDefaultResult;
        return $this;
    }

}
