<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindCompaniesResponse
{

    /**
     * @var ArrayOfCompanyFindResult $FindCompaniesResult
     */
    protected $FindCompaniesResult = null;

    /**
     * @param ArrayOfCompanyFindResult $FindCompaniesResult
     */
    public function __construct($FindCompaniesResult = null)
    {
        $this->FindCompaniesResult = $FindCompaniesResult;
    }

    /**
     * @return ArrayOfCompanyFindResult
     */
    public function getFindCompaniesResult()
    {
        return $this->FindCompaniesResult;
    }

    /**
     * @param ArrayOfCompanyFindResult $FindCompaniesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindCompaniesResponse
     */
    public function setFindCompaniesResult($FindCompaniesResult)
    {
        $this->FindCompaniesResult = $FindCompaniesResult;
        return $this;
    }

}
