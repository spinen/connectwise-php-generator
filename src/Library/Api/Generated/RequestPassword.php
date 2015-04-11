<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RequestPassword
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $emailAddress
     */
    protected $emailAddress = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $emailAddress
     */
    public function __construct(ApiCredentials $credentials = null, $emailAddress = null)
    {
        $this->credentials  = $credentials;
        $this->emailAddress = $emailAddress;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RequestPassword
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\RequestPassword
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

}
