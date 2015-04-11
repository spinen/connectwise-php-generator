<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AuthenticateResponse
{

    /**
     * @var AuthenticationResponse $AuthenticateResult
     */
    protected $AuthenticateResult = null;

    /**
     * @param AuthenticationResponse $AuthenticateResult
     */
    public function __construct(AuthenticationResponse $AuthenticateResult = null)
    {
        $this->AuthenticateResult = $AuthenticateResult;
    }

    /**
     * @return AuthenticationResponse
     */
    public function getAuthenticateResult()
    {
        return $this->AuthenticateResult;
    }

    /**
     * @param AuthenticationResponse $AuthenticateResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticateResponse
     */
    public function setAuthenticateResult(AuthenticationResponse $AuthenticateResult)
    {
        $this->AuthenticateResult = $AuthenticateResult;
        return $this;
    }

}
