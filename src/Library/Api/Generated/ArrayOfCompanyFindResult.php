<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfCompanyFindResult
{

    /**
     * @var CompanyFindResult[] $CompanyFindResult
     */
    protected $CompanyFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return CompanyFindResult[]
     */
    public function getCompanyFindResult()
    {
        return $this->CompanyFindResult;
    }

    /**
     * @param CompanyFindResult[] $CompanyFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfCompanyFindResult
     */
    public function setCompanyFindResult(array $CompanyFindResult = null)
    {
        $this->CompanyFindResult = $CompanyFindResult;
        return $this;
    }

}
