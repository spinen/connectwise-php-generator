<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementWorkType
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var AgreementWorkType $agreementWorkType
     */
    protected $agreementWorkType = null;

    /**
     * @param ApiCredentials $credentials
     * @param AgreementWorkType $agreementWorkType
     */
    public function __construct(ApiCredentials $credentials = null, AgreementWorkType $agreementWorkType = null)
    {
        $this->credentials       = $credentials;
        $this->agreementWorkType = $agreementWorkType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementWorkType
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return AgreementWorkType
     */
    public function getAgreementWorkType()
    {
        return $this->agreementWorkType;
    }

    /**
     * @param AgreementWorkType $agreementWorkType
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementWorkType
     */
    public function setAgreementWorkType(AgreementWorkType $agreementWorkType)
    {
        $this->agreementWorkType = $agreementWorkType;
        return $this;
    }

}
