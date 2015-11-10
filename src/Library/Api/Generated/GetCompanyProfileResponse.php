<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetCompanyProfileResponse
{

    /**
     * @var CompanyProfile $GetCompanyProfileResult
     */
    protected $GetCompanyProfileResult = null;

    /**
     * @param CompanyProfile $GetCompanyProfileResult
     */
    public function __construct(CompanyProfile $GetCompanyProfileResult = null)
    {
        $this->GetCompanyProfileResult = $GetCompanyProfileResult;
    }

    /**
     * @return CompanyProfile
     */
    public function getGetCompanyProfileResult()
    {
        return $this->GetCompanyProfileResult;
    }

    /**
     * @param CompanyProfile $GetCompanyProfileResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetCompanyProfileResponse
     */
    public function setGetCompanyProfileResult(CompanyProfile $GetCompanyProfileResult)
    {
        $this->GetCompanyProfileResult = $GetCompanyProfileResult;
        return $this;
    }

}
