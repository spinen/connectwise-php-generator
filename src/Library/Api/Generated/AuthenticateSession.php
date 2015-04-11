<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AuthenticateSession
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $memberId
     */
    protected $memberId = null;

    /**
     * @var string $session
     */
    protected $session = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $memberId
     * @param string $session
     */
    public function __construct(ApiCredentials $credentials = null, $memberId = null, $session = null)
    {
        $this->credentials = $credentials;
        $this->memberId    = $memberId;
        $this->session     = $session;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticateSession
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param string $memberId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticateSession
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * @param string $session
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticateSession
     */
    public function setSession($session)
    {
        $this->session = $session;
        return $this;
    }

}
