<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CreateAuthenticatedMemberHashToken
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $companyId
     */
    protected $companyId = null;

    /**
     * @var string $memberId
     */
    protected $memberId = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $companyId
     * @param string $memberId
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, $memberId = null)
    {
        $this->credentials = $credentials;
        $this->companyId   = $companyId;
        $this->memberId    = $memberId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreateAuthenticatedMemberHashToken
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param string $companyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreateAuthenticatedMemberHashToken
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreateAuthenticatedMemberHashToken
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
        return $this;
    }

}
