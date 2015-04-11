<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CheckConnectWiseAuthenticationCredentials
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $memberIdentifier
     */
    protected $memberIdentifier = null;

    /**
     * @var string $password
     */
    protected $password = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $memberIdentifier
     * @param string $password
     */
    public function __construct(ApiCredentials $credentials = null, $memberIdentifier = null, $password = null)
    {
        $this->credentials      = $credentials;
        $this->memberIdentifier = $memberIdentifier;
        $this->password         = $password;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CheckConnectWiseAuthenticationCredentials
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberIdentifier()
    {
        return $this->memberIdentifier;
    }

    /**
     * @param string $memberIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\CheckConnectWiseAuthenticationCredentials
     */
    public function setMemberIdentifier($memberIdentifier)
    {
        $this->memberIdentifier = $memberIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CheckConnectWiseAuthenticationCredentials
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}
