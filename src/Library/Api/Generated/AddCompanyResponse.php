<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddCompanyResponse
{

    /**
     * @var Company $AddCompanyResult
     */
    protected $AddCompanyResult = null;

    /**
     * @param Company $AddCompanyResult
     */
    public function __construct(Company $AddCompanyResult = null)
    {
        $this->AddCompanyResult = $AddCompanyResult;
    }

    /**
     * @return Company
     */
    public function getAddCompanyResult()
    {
        return $this->AddCompanyResult;
    }

    /**
     * @param Company $AddCompanyResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddCompanyResponse
     */
    public function setAddCompanyResult(Company $AddCompanyResult)
    {
        $this->AddCompanyResult = $AddCompanyResult;
        return $this;
    }

}
