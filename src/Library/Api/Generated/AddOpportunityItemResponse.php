<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOpportunityItemResponse
{

    /**
     * @var OpportunityItem $AddOpportunityItemResult
     */
    protected $AddOpportunityItemResult = null;

    /**
     * @param OpportunityItem $AddOpportunityItemResult
     */
    public function __construct(OpportunityItem $AddOpportunityItemResult = null)
    {
        $this->AddOpportunityItemResult = $AddOpportunityItemResult;
    }

    /**
     * @return OpportunityItem
     */
    public function getAddOpportunityItemResult()
    {
        return $this->AddOpportunityItemResult;
    }

    /**
     * @param OpportunityItem $AddOpportunityItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityItemResponse
     */
    public function setAddOpportunityItemResult(OpportunityItem $AddOpportunityItemResult)
    {
        $this->AddOpportunityItemResult = $AddOpportunityItemResult;
        return $this;
    }

}
