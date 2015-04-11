<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetAgreementSiteResponse
{

    /**
     * @var AgreementSite $GetAgreementSiteResult
     */
    protected $GetAgreementSiteResult = null;

    /**
     * @param AgreementSite $GetAgreementSiteResult
     */
    public function __construct(AgreementSite $GetAgreementSiteResult = null)
    {
        $this->GetAgreementSiteResult = $GetAgreementSiteResult;
    }

    /**
     * @return AgreementSite
     */
    public function getGetAgreementSiteResult()
    {
        return $this->GetAgreementSiteResult;
    }

    /**
     * @param AgreementSite $GetAgreementSiteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetAgreementSiteResponse
     */
    public function setGetAgreementSiteResult(AgreementSite $GetAgreementSiteResult)
    {
        $this->GetAgreementSiteResult = $GetAgreementSiteResult;
        return $this;
    }

}
