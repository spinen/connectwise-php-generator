<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementSite
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var AgreementSite $agreementSite
     */
    protected $agreementSite = null;

    /**
     * @param ApiCredentials $credentials
     * @param AgreementSite $agreementSite
     */
    public function __construct(ApiCredentials $credentials = null, AgreementSite $agreementSite = null)
    {
        $this->credentials   = $credentials;
        $this->agreementSite = $agreementSite;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementSite
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return AgreementSite
     */
    public function getAgreementSite()
    {
        return $this->agreementSite;
    }

    /**
     * @param AgreementSite $agreementSite
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementSite
     */
    public function setAgreementSite(AgreementSite $agreementSite)
    {
        $this->agreementSite = $agreementSite;
        return $this;
    }

}
