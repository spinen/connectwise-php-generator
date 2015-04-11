<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateOpportunityItemResponse
{

    /**
     * @var OpportunityItem $UpdateOpportunityItemResult
     */
    protected $UpdateOpportunityItemResult = null;

    /**
     * @param OpportunityItem $UpdateOpportunityItemResult
     */
    public function __construct(OpportunityItem $UpdateOpportunityItemResult = null)
    {
        $this->UpdateOpportunityItemResult = $UpdateOpportunityItemResult;
    }

    /**
     * @return OpportunityItem
     */
    public function getUpdateOpportunityItemResult()
    {
        return $this->UpdateOpportunityItemResult;
    }

    /**
     * @param OpportunityItem $UpdateOpportunityItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateOpportunityItemResponse
     */
    public function setUpdateOpportunityItemResult(OpportunityItem $UpdateOpportunityItemResult)
    {
        $this->UpdateOpportunityItemResult = $UpdateOpportunityItemResult;
        return $this;
    }

}
