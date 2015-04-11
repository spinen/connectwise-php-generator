<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateAgreement
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Agreement $agreement
     */
    protected $agreement = null;

    /**
     * @param ApiCredentials $credentials
     * @param Agreement $agreement
     */
    public function __construct(ApiCredentials $credentials = null, Agreement $agreement = null)
    {
        $this->credentials = $credentials;
        $this->agreement   = $agreement;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreement
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Agreement
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    /**
     * @param Agreement $agreement
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateAgreement
     */
    public function setAgreement(Agreement $agreement)
    {
        $this->agreement = $agreement;
        return $this;
    }

}
