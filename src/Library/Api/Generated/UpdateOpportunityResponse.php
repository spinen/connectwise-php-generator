<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateOpportunityResponse
{

    /**
     * @var Opportunity $UpdateOpportunityResult
     */
    protected $UpdateOpportunityResult = null;

    /**
     * @param Opportunity $UpdateOpportunityResult
     */
    public function __construct(Opportunity $UpdateOpportunityResult = null)
    {
        $this->UpdateOpportunityResult = $UpdateOpportunityResult;
    }

    /**
     * @return Opportunity
     */
    public function getUpdateOpportunityResult()
    {
        return $this->UpdateOpportunityResult;
    }

    /**
     * @param Opportunity $UpdateOpportunityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateOpportunityResponse
     */
    public function setUpdateOpportunityResult(Opportunity $UpdateOpportunityResult)
    {
        $this->UpdateOpportunityResult = $UpdateOpportunityResult;
        return $this;
    }

}
