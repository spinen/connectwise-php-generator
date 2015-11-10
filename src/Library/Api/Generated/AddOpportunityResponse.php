<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOpportunityResponse
{

    /**
     * @var Opportunity $AddOpportunityResult
     */
    protected $AddOpportunityResult = null;

    /**
     * @param Opportunity $AddOpportunityResult
     */
    public function __construct(Opportunity $AddOpportunityResult = null)
    {
        $this->AddOpportunityResult = $AddOpportunityResult;
    }

    /**
     * @return Opportunity
     */
    public function getAddOpportunityResult()
    {
        return $this->AddOpportunityResult;
    }

    /**
     * @param Opportunity $AddOpportunityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityResponse
     */
    public function setAddOpportunityResult(Opportunity $AddOpportunityResult)
    {
        $this->AddOpportunityResult = $AddOpportunityResult;
        return $this;
    }

}
