<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateCompanyProfile
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var CompanyProfile $companyProfile
     */
    protected $companyProfile = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $companyId
     * @param CompanyProfile $companyProfile
     */
    public function __construct(ApiCredentials $credentials = null, $companyId = null, CompanyProfile $companyProfile = null)
    {
        $this->credentials    = $credentials;
        $this->companyId      = $companyId;
        $this->companyProfile = $companyProfile;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateCompanyProfile
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateCompanyProfile
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return CompanyProfile
     */
    public function getCompanyProfile()
    {
        return $this->companyProfile;
    }

    /**
     * @param CompanyProfile $companyProfile
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateCompanyProfile
     */
    public function setCompanyProfile(CompanyProfile $companyProfile)
    {
        $this->companyProfile = $companyProfile;
        return $this;
    }

}
