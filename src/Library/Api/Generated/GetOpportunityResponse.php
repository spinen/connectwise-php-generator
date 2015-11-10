<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetOpportunityResponse
{

    /**
     * @var Opportunity $GetOpportunityResult
     */
    protected $GetOpportunityResult = null;

    /**
     * @param Opportunity $GetOpportunityResult
     */
    public function __construct(Opportunity $GetOpportunityResult = null)
    {
        $this->GetOpportunityResult = $GetOpportunityResult;
    }

    /**
     * @return Opportunity
     */
    public function getGetOpportunityResult()
    {
        return $this->GetOpportunityResult;
    }

    /**
     * @param Opportunity $GetOpportunityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetOpportunityResponse
     */
    public function setGetOpportunityResult(Opportunity $GetOpportunityResult)
    {
        $this->GetOpportunityResult = $GetOpportunityResult;
        return $this;
    }

}
