<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyTeam
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var CompanyTeam $companyTeam
     */
    protected $companyTeam = null;

    /**
     * @param ApiCredentials $credentials
     * @param CompanyTeam $companyTeam
     */
    public function __construct(ApiCredentials $credentials = null, CompanyTeam $companyTeam = null)
    {
        $this->credentials = $credentials;
        $this->companyTeam = $companyTeam;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyTeam
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return CompanyTeam
     */
    public function getCompanyTeam()
    {
        return $this->companyTeam;
    }

    /**
     * @param CompanyTeam $companyTeam
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyTeam
     */
    public function setCompanyTeam(CompanyTeam $companyTeam)
    {
        $this->companyTeam = $companyTeam;
        return $this;
    }

}
