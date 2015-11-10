<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementExclusionsResponse
{

    /**
     * @var ArrayOfAgreementExclusionFindResult $FindAgreementExclusionsResult
     */
    protected $FindAgreementExclusionsResult = null;

    /**
     * @param ArrayOfAgreementExclusionFindResult $FindAgreementExclusionsResult
     */
    public function __construct($FindAgreementExclusionsResult = null)
    {
        $this->FindAgreementExclusionsResult = $FindAgreementExclusionsResult;
    }

    /**
     * @return ArrayOfAgreementExclusionFindResult
     */
    public function getFindAgreementExclusionsResult()
    {
        return $this->FindAgreementExclusionsResult;
    }

    /**
     * @param ArrayOfAgreementExclusionFindResult $FindAgreementExclusionsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementExclusionsResponse
     */
    public function setFindAgreementExclusionsResult($FindAgreementExclusionsResult)
    {
        $this->FindAgreementExclusionsResult = $FindAgreementExclusionsResult;
        return $this;
    }

}
