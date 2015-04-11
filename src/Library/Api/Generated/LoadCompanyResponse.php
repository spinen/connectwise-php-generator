<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadCompanyResponse
{

    /**
     * @var Company $LoadCompanyResult
     */
    protected $LoadCompanyResult = null;

    /**
     * @param Company $LoadCompanyResult
     */
    public function __construct(Company $LoadCompanyResult = null)
    {
        $this->LoadCompanyResult = $LoadCompanyResult;
    }

    /**
     * @return Company
     */
    public function getLoadCompanyResult()
    {
        return $this->LoadCompanyResult;
    }

    /**
     * @param Company $LoadCompanyResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadCompanyResponse
     */
    public function setLoadCompanyResult(Company $LoadCompanyResult)
    {
        $this->LoadCompanyResult = $LoadCompanyResult;
        return $this;
    }

}
