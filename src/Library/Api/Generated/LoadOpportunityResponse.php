<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadOpportunityResponse
{

    /**
     * @var Opportunity $LoadOpportunityResult
     */
    protected $LoadOpportunityResult = null;

    /**
     * @param Opportunity $LoadOpportunityResult
     */
    public function __construct(Opportunity $LoadOpportunityResult = null)
    {
        $this->LoadOpportunityResult = $LoadOpportunityResult;
    }

    /**
     * @return Opportunity
     */
    public function getLoadOpportunityResult()
    {
        return $this->LoadOpportunityResult;
    }

    /**
     * @param Opportunity $LoadOpportunityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadOpportunityResponse
     */
    public function setLoadOpportunityResult(Opportunity $LoadOpportunityResult)
    {
        $this->LoadOpportunityResult = $LoadOpportunityResult;
        return $this;
    }

}
