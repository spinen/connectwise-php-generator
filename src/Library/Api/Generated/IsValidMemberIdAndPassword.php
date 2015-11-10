<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class IsValidMemberIdAndPassword
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
     * @var string $password
     */
    protected $password = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $memberId
     * @param string $password
     */
    public function __construct(ApiCredentials $credentials = null, $memberId = null, $password = null)
    {
        $this->credentials = $credentials;
        $this->memberId    = $memberId;
        $this->password    = $password;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\IsValidMemberIdAndPassword
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\IsValidMemberIdAndPassword
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\IsValidMemberIdAndPassword
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}
