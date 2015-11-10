<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetMemberIdByRemoteSupportPackageAuthenticationCredentials
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var RemoteSupportPackage $remoteSupportPackage
     */
    protected $remoteSupportPackage = null;

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param ApiCredentials $credentials
     * @param RemoteSupportPackage $remoteSupportPackage
     * @param string $username
     * @param string $password
     */
    public function __construct(ApiCredentials $credentials = null, RemoteSupportPackage $remoteSupportPackage = null, $username = null, $password = null)
    {
        $this->credentials          = $credentials;
        $this->remoteSupportPackage = $remoteSupportPackage;
        $this->username             = $username;
        $this->password             = $password;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetMemberIdByRemoteSupportPackageAuthenticationCredentials
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return RemoteSupportPackage
     */
    public function getRemoteSupportPackage()
    {
        return $this->remoteSupportPackage;
    }

    /**
     * @param RemoteSupportPackage $remoteSupportPackage
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetMemberIdByRemoteSupportPackageAuthenticationCredentials
     */
    public function setRemoteSupportPackage(RemoteSupportPackage $remoteSupportPackage)
    {
        $this->remoteSupportPackage = $remoteSupportPackage;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetMemberIdByRemoteSupportPackageAuthenticationCredentials
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetMemberIdByRemoteSupportPackageAuthenticationCredentials
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}
