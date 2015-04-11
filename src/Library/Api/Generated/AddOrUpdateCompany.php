<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompany
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Company $company
     */
    protected $company = null;

    /**
     * @param ApiCredentials $credentials
     * @param Company $company
     */
    public function __construct(ApiCredentials $credentials = null, Company $company = null)
    {
        $this->credentials = $credentials;
        $this->company     = $company;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompany
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Company $company
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompany
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
        return $this;
    }

}
