<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetApplyToForCompanyByTypeResponse
{

    /**
     * @var ArrayOfApplyTo $GetApplyToForCompanyByTypeResult
     */
    protected $GetApplyToForCompanyByTypeResult = null;

    /**
     * @param ArrayOfApplyTo $GetApplyToForCompanyByTypeResult
     */
    public function __construct($GetApplyToForCompanyByTypeResult = null)
    {
        $this->GetApplyToForCompanyByTypeResult = $GetApplyToForCompanyByTypeResult;
    }

    /**
     * @return ArrayOfApplyTo
     */
    public function getGetApplyToForCompanyByTypeResult()
    {
        return $this->GetApplyToForCompanyByTypeResult;
    }

    /**
     * @param ArrayOfApplyTo $GetApplyToForCompanyByTypeResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetApplyToForCompanyByTypeResponse
     */
    public function setGetApplyToForCompanyByTypeResult($GetApplyToForCompanyByTypeResult)
    {
        $this->GetApplyToForCompanyByTypeResult = $GetApplyToForCompanyByTypeResult;
        return $this;
    }

}
