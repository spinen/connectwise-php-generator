<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementAddition
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var AgreementAddition $agreementAddition
     */
    protected $agreementAddition = null;

    /**
     * @param ApiCredentials $credentials
     * @param AgreementAddition $agreementAddition
     */
    public function __construct(ApiCredentials $credentials = null, AgreementAddition $agreementAddition = null)
    {
        $this->credentials       = $credentials;
        $this->agreementAddition = $agreementAddition;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementAddition
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return AgreementAddition
     */
    public function getAgreementAddition()
    {
        return $this->agreementAddition;
    }

    /**
     * @param AgreementAddition $agreementAddition
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementAddition
     */
    public function setAgreementAddition(AgreementAddition $agreementAddition)
    {
        $this->agreementAddition = $agreementAddition;
        return $this;
    }

}
