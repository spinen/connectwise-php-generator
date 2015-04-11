<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateCompanyResponse
{

    /**
     * @var Company $AddOrUpdateCompanyResult
     */
    protected $AddOrUpdateCompanyResult = null;

    /**
     * @param Company $AddOrUpdateCompanyResult
     */
    public function __construct(Company $AddOrUpdateCompanyResult = null)
    {
        $this->AddOrUpdateCompanyResult = $AddOrUpdateCompanyResult;
    }

    /**
     * @return Company
     */
    public function getAddOrUpdateCompanyResult()
    {
        return $this->AddOrUpdateCompanyResult;
    }

    /**
     * @param Company $AddOrUpdateCompanyResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateCompanyResponse
     */
    public function setAddOrUpdateCompanyResult(Company $AddOrUpdateCompanyResult)
    {
        $this->AddOrUpdateCompanyResult = $AddOrUpdateCompanyResult;
        return $this;
    }

}
