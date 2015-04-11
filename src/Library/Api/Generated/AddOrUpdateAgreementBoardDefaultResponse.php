<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementBoardDefaultResponse
{

    /**
     * @var AgreementBoardDefault $AddOrUpdateAgreementBoardDefaultResult
     */
    protected $AddOrUpdateAgreementBoardDefaultResult = null;

    /**
     * @param AgreementBoardDefault $AddOrUpdateAgreementBoardDefaultResult
     */
    public function __construct(AgreementBoardDefault $AddOrUpdateAgreementBoardDefaultResult = null)
    {
        $this->AddOrUpdateAgreementBoardDefaultResult = $AddOrUpdateAgreementBoardDefaultResult;
    }

    /**
     * @return AgreementBoardDefault
     */
    public function getAddOrUpdateAgreementBoardDefaultResult()
    {
        return $this->AddOrUpdateAgreementBoardDefaultResult;
    }

    /**
     * @param AgreementBoardDefault $AddOrUpdateAgreementBoardDefaultResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementBoardDefaultResponse
     */
    public function setAddOrUpdateAgreementBoardDefaultResult(AgreementBoardDefault $AddOrUpdateAgreementBoardDefaultResult)
    {
        $this->AddOrUpdateAgreementBoardDefaultResult = $AddOrUpdateAgreementBoardDefaultResult;
        return $this;
    }

}
