<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreementBoardDefault
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var AgreementBoardDefault $agreementBoardDefault
     */
    protected $agreementBoardDefault = null;

    /**
     * @param ApiCredentials $credentials
     * @param AgreementBoardDefault $agreementBoardDefault
     */
    public function __construct(ApiCredentials $credentials = null, AgreementBoardDefault $agreementBoardDefault = null)
    {
        $this->credentials           = $credentials;
        $this->agreementBoardDefault = $agreementBoardDefault;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementBoardDefault
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return AgreementBoardDefault
     */
    public function getAgreementBoardDefault()
    {
        return $this->agreementBoardDefault;
    }

    /**
     * @param AgreementBoardDefault $agreementBoardDefault
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreementBoardDefault
     */
    public function setAgreementBoardDefault(AgreementBoardDefault $agreementBoardDefault)
    {
        $this->agreementBoardDefault = $agreementBoardDefault;
        return $this;
    }

}
