<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindAgreementSitesResponse
{

    /**
     * @var ArrayOfAgreementSiteFindResult $FindAgreementSitesResult
     */
    protected $FindAgreementSitesResult = null;

    /**
     * @param ArrayOfAgreementSiteFindResult $FindAgreementSitesResult
     */
    public function __construct($FindAgreementSitesResult = null)
    {
        $this->FindAgreementSitesResult = $FindAgreementSitesResult;
    }

    /**
     * @return ArrayOfAgreementSiteFindResult
     */
    public function getFindAgreementSitesResult()
    {
        return $this->FindAgreementSitesResult;
    }

    /**
     * @param ArrayOfAgreementSiteFindResult $FindAgreementSitesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindAgreementSitesResponse
     */
    public function setFindAgreementSitesResult($FindAgreementSitesResult)
    {
        $this->FindAgreementSitesResult = $FindAgreementSitesResult;
        return $this;
    }

}
