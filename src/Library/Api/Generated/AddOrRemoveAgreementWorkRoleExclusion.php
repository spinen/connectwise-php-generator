<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrRemoveAgreementWorkRoleExclusion
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ArrayOfAgreementWorkRoleExclusion $agreementWorkRoleExclusion
     */
    protected $agreementWorkRoleExclusion = null;

    /**
     * @param ApiCredentials $credentials
     * @param ArrayOfAgreementWorkRoleExclusion $agreementWorkRoleExclusion
     */
    public function __construct(ApiCredentials $credentials = null, $agreementWorkRoleExclusion = null)
    {
        $this->credentials                = $credentials;
        $this->agreementWorkRoleExclusion = $agreementWorkRoleExclusion;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrRemoveAgreementWorkRoleExclusion
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ArrayOfAgreementWorkRoleExclusion
     */
    public function getAgreementWorkRoleExclusion()
    {
        return $this->agreementWorkRoleExclusion;
    }

    /**
     * @param ArrayOfAgreementWorkRoleExclusion $agreementWorkRoleExclusion
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrRemoveAgreementWorkRoleExclusion
     */
    public function setAgreementWorkRoleExclusion($agreementWorkRoleExclusion)
    {
        $this->agreementWorkRoleExclusion = $agreementWorkRoleExclusion;
        return $this;
    }

}
