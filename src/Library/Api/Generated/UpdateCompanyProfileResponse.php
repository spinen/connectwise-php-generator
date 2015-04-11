<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateCompanyProfileResponse
{

    /**
     * @var CompanyProfile $UpdateCompanyProfileResult
     */
    protected $UpdateCompanyProfileResult = null;

    /**
     * @param CompanyProfile $UpdateCompanyProfileResult
     */
    public function __construct(CompanyProfile $UpdateCompanyProfileResult = null)
    {
        $this->UpdateCompanyProfileResult = $UpdateCompanyProfileResult;
    }

    /**
     * @return CompanyProfile
     */
    public function getUpdateCompanyProfileResult()
    {
        return $this->UpdateCompanyProfileResult;
    }

    /**
     * @param CompanyProfile $UpdateCompanyProfileResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateCompanyProfileResponse
     */
    public function setUpdateCompanyProfileResult(CompanyProfile $UpdateCompanyProfileResult)
    {
        $this->UpdateCompanyProfileResult = $UpdateCompanyProfileResult;
        return $this;
    }

}
