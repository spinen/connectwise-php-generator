<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementWorkRole
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var AgreementWorkRole $agreementWorkRole
     */
    protected $agreementWorkRole = null;

    /**
     * @param ApiCredentials $credentials
     * @param AgreementWorkRole $agreementWorkRole
     */
    public function __construct(ApiCredentials $credentials = null, AgreementWorkRole $agreementWorkRole = null)
    {
        $this->credentials       = $credentials;
        $this->agreementWorkRole = $agreementWorkRole;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementWorkRole
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return AgreementWorkRole
     */
    public function getAgreementWorkRole()
    {
        return $this->agreementWorkRole;
    }

    /**
     * @param AgreementWorkRole $agreementWorkRole
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementWorkRole
     */
    public function setAgreementWorkRole(AgreementWorkRole $agreementWorkRole)
    {
        $this->agreementWorkRole = $agreementWorkRole;
        return $this;
    }

}
