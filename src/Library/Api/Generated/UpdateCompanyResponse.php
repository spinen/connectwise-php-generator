<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateCompanyResponse
{

    /**
     * @var Company $UpdateCompanyResult
     */
    protected $UpdateCompanyResult = null;

    /**
     * @param Company $UpdateCompanyResult
     */
    public function __construct(Company $UpdateCompanyResult = null)
    {
        $this->UpdateCompanyResult = $UpdateCompanyResult;
    }

    /**
     * @return Company
     */
    public function getUpdateCompanyResult()
    {
        return $this->UpdateCompanyResult;
    }

    /**
     * @param Company $UpdateCompanyResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateCompanyResponse
     */
    public function setUpdateCompanyResult(Company $UpdateCompanyResult)
    {
        $this->UpdateCompanyResult = $UpdateCompanyResult;
        return $this;
    }

}
