<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementAdjustment
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var AgreementAdjustment $agreementAdjustment
     */
    protected $agreementAdjustment = null;

    /**
     * @param ApiCredentials $credentials
     * @param AgreementAdjustment $agreementAdjustment
     */
    public function __construct(ApiCredentials $credentials = null, AgreementAdjustment $agreementAdjustment = null)
    {
        $this->credentials         = $credentials;
        $this->agreementAdjustment = $agreementAdjustment;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementAdjustment
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return AgreementAdjustment
     */
    public function getAgreementAdjustment()
    {
        return $this->agreementAdjustment;
    }

    /**
     * @param AgreementAdjustment $agreementAdjustment
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementAdjustment
     */
    public function setAgreementAdjustment(AgreementAdjustment $agreementAdjustment)
    {
        $this->agreementAdjustment = $agreementAdjustment;
        return $this;
    }

}
