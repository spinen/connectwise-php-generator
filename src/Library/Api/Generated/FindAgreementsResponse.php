<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementsResponse
{

    /**
     * @var ArrayOfAgreementFindResult $FindAgreementsResult
     */
    protected $FindAgreementsResult = null;

    /**
     * @param ArrayOfAgreementFindResult $FindAgreementsResult
     */
    public function __construct($FindAgreementsResult = null)
    {
        $this->FindAgreementsResult = $FindAgreementsResult;
    }

    /**
     * @return ArrayOfAgreementFindResult
     */
    public function getFindAgreementsResult()
    {
        return $this->FindAgreementsResult;
    }

    /**
     * @param ArrayOfAgreementFindResult $FindAgreementsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementsResponse
     */
    public function setFindAgreementsResult($FindAgreementsResult)
    {
        $this->FindAgreementsResult = $FindAgreementsResult;
        return $this;
    }

}
