<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrRemoveAgreementWorkTypeExclusion
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ArrayOfAgreementWorkTypeExclusion $agreementWorkTypeExclusion
     */
    protected $agreementWorkTypeExclusion = null;

    /**
     * @param ApiCredentials $credentials
     * @param ArrayOfAgreementWorkTypeExclusion $agreementWorkTypeExclusion
     */
    public function __construct(ApiCredentials $credentials = null, $agreementWorkTypeExclusion = null)
    {
        $this->credentials                = $credentials;
        $this->agreementWorkTypeExclusion = $agreementWorkTypeExclusion;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrRemoveAgreementWorkTypeExclusion
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ArrayOfAgreementWorkTypeExclusion
     */
    public function getAgreementWorkTypeExclusion()
    {
        return $this->agreementWorkTypeExclusion;
    }

    /**
     * @param ArrayOfAgreementWorkTypeExclusion $agreementWorkTypeExclusion
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrRemoveAgreementWorkTypeExclusion
     */
    public function setAgreementWorkTypeExclusion($agreementWorkTypeExclusion)
    {
        $this->agreementWorkTypeExclusion = $agreementWorkTypeExclusion;
        return $this;
    }

}
