<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetCompanyResponse
{

    /**
     * @var Company $GetCompanyResult
     */
    protected $GetCompanyResult = null;

    /**
     * @param Company $GetCompanyResult
     */
    public function __construct(Company $GetCompanyResult = null)
    {
        $this->GetCompanyResult = $GetCompanyResult;
    }

    /**
     * @return Company
     */
    public function getGetCompanyResult()
    {
        return $this->GetCompanyResult;
    }

    /**
     * @param Company $GetCompanyResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetCompanyResponse
     */
    public function setGetCompanyResult(Company $GetCompanyResult)
    {
        $this->GetCompanyResult = $GetCompanyResult;
        return $this;
    }

}
