<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateOpportunityResponse
{

    /**
     * @var Opportunity $AddOrUpdateOpportunityResult
     */
    protected $AddOrUpdateOpportunityResult = null;

    /**
     * @param Opportunity $AddOrUpdateOpportunityResult
     */
    public function __construct(Opportunity $AddOrUpdateOpportunityResult = null)
    {
        $this->AddOrUpdateOpportunityResult = $AddOrUpdateOpportunityResult;
    }

    /**
     * @return Opportunity
     */
    public function getAddOrUpdateOpportunityResult()
    {
        return $this->AddOrUpdateOpportunityResult;
    }

    /**
     * @param Opportunity $AddOrUpdateOpportunityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateOpportunityResponse
     */
    public function setAddOrUpdateOpportunityResult(Opportunity $AddOrUpdateOpportunityResult)
    {
        $this->AddOrUpdateOpportunityResult = $AddOrUpdateOpportunityResult;
        return $this;
    }

}
