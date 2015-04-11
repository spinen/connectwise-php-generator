<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AuthenticateSessionResponse
{

    /**
     * @var boolean $AuthenticateSessionResult
     */
    protected $AuthenticateSessionResult = null;

    /**
     * @param boolean $AuthenticateSessionResult
     */
    public function __construct($AuthenticateSessionResult = null)
    {
        $this->AuthenticateSessionResult = $AuthenticateSessionResult;
    }

    /**
     * @return boolean
     */
    public function getAuthenticateSessionResult()
    {
        return $this->AuthenticateSessionResult;
    }

    /**
     * @param boolean $AuthenticateSessionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AuthenticateSessionResponse
     */
    public function setAuthenticateSessionResult($AuthenticateSessionResult)
    {
        $this->AuthenticateSessionResult = $AuthenticateSessionResult;
        return $this;
    }

}
