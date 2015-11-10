<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementWorkTypesResponse
{

    /**
     * @var ArrayOfAgreementWorkTypeFindResult $FindAgreementWorkTypesResult
     */
    protected $FindAgreementWorkTypesResult = null;

    /**
     * @param ArrayOfAgreementWorkTypeFindResult $FindAgreementWorkTypesResult
     */
    public function __construct($FindAgreementWorkTypesResult = null)
    {
        $this->FindAgreementWorkTypesResult = $FindAgreementWorkTypesResult;
    }

    /**
     * @return ArrayOfAgreementWorkTypeFindResult
     */
    public function getFindAgreementWorkTypesResult()
    {
        return $this->FindAgreementWorkTypesResult;
    }

    /**
     * @param ArrayOfAgreementWorkTypeFindResult $FindAgreementWorkTypesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementWorkTypesResponse
     */
    public function setFindAgreementWorkTypesResult($FindAgreementWorkTypesResult)
    {
        $this->FindAgreementWorkTypesResult = $FindAgreementWorkTypesResult;
        return $this;
    }

}
