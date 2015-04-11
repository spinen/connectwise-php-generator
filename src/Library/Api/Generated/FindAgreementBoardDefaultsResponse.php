<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementBoardDefaultsResponse
{

    /**
     * @var ArrayOfAgreementBoardDefaultFindResult $FindAgreementBoardDefaultsResult
     */
    protected $FindAgreementBoardDefaultsResult = null;

    /**
     * @param ArrayOfAgreementBoardDefaultFindResult $FindAgreementBoardDefaultsResult
     */
    public function __construct($FindAgreementBoardDefaultsResult = null)
    {
        $this->FindAgreementBoardDefaultsResult = $FindAgreementBoardDefaultsResult;
    }

    /**
     * @return ArrayOfAgreementBoardDefaultFindResult
     */
    public function getFindAgreementBoardDefaultsResult()
    {
        return $this->FindAgreementBoardDefaultsResult;
    }

    /**
     * @param ArrayOfAgreementBoardDefaultFindResult $FindAgreementBoardDefaultsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementBoardDefaultsResponse
     */
    public function setFindAgreementBoardDefaultsResult($FindAgreementBoardDefaultsResult)
    {
        $this->FindAgreementBoardDefaultsResult = $FindAgreementBoardDefaultsResult;
        return $this;
    }

}
