<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse
{

    /**
     * @var string $GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult
     */
    protected $GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult = null;

    /**
     * @param string $GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult
     */
    public function __construct($GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult = null)
    {
        $this->GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult = $GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult;
    }

    /**
     * @return string
     */
    public function getGetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult()
    {
        return $this->GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult;
    }

    /**
     * @param string $GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResponse
     */
    public function setGetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult($GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult)
    {
        $this->GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult = $GetMemberIdByRemoteSupportPackageAuthenticationCredentialsResult;
        return $this;
    }

}
