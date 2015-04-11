<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CheckConnectWiseAuthenticationCredentialsResponse
{

    /**
     * @var CredentialsCheckResult $CheckConnectWiseAuthenticationCredentialsResult
     */
    protected $CheckConnectWiseAuthenticationCredentialsResult = null;

    /**
     * @param CredentialsCheckResult $CheckConnectWiseAuthenticationCredentialsResult
     */
    public function __construct(CredentialsCheckResult $CheckConnectWiseAuthenticationCredentialsResult = null)
    {
        $this->CheckConnectWiseAuthenticationCredentialsResult = $CheckConnectWiseAuthenticationCredentialsResult;
    }

    /**
     * @return CredentialsCheckResult
     */
    public function getCheckConnectWiseAuthenticationCredentialsResult()
    {
        return $this->CheckConnectWiseAuthenticationCredentialsResult;
    }

    /**
     * @param CredentialsCheckResult $CheckConnectWiseAuthenticationCredentialsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\CheckConnectWiseAuthenticationCredentialsResponse
     */
    public function setCheckConnectWiseAuthenticationCredentialsResult(CredentialsCheckResult $CheckConnectWiseAuthenticationCredentialsResult)
    {
        $this->CheckConnectWiseAuthenticationCredentialsResult = $CheckConnectWiseAuthenticationCredentialsResult;
        return $this;
    }

}
