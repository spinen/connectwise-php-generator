<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementSiteResponse
{

    /**
     * @var AgreementSite $AddOrUpdateAgreementSiteResult
     */
    protected $AddOrUpdateAgreementSiteResult = null;

    /**
     * @param AgreementSite $AddOrUpdateAgreementSiteResult
     */
    public function __construct(AgreementSite $AddOrUpdateAgreementSiteResult = null)
    {
        $this->AddOrUpdateAgreementSiteResult = $AddOrUpdateAgreementSiteResult;
    }

    /**
     * @return AgreementSite
     */
    public function getAddOrUpdateAgreementSiteResult()
    {
        return $this->AddOrUpdateAgreementSiteResult;
    }

    /**
     * @param AgreementSite $AddOrUpdateAgreementSiteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementSiteResponse
     */
    public function setAddOrUpdateAgreementSiteResult(AgreementSite $AddOrUpdateAgreementSiteResult)
    {
        $this->AddOrUpdateAgreementSiteResult = $AddOrUpdateAgreementSiteResult;
        return $this;
    }

}
