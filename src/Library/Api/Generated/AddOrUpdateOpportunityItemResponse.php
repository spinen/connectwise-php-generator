<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateOpportunityItemResponse
{

    /**
     * @var OpportunityItem $AddOrUpdateOpportunityItemResult
     */
    protected $AddOrUpdateOpportunityItemResult = null;

    /**
     * @param OpportunityItem $AddOrUpdateOpportunityItemResult
     */
    public function __construct(OpportunityItem $AddOrUpdateOpportunityItemResult = null)
    {
        $this->AddOrUpdateOpportunityItemResult = $AddOrUpdateOpportunityItemResult;
    }

    /**
     * @return OpportunityItem
     */
    public function getAddOrUpdateOpportunityItemResult()
    {
        return $this->AddOrUpdateOpportunityItemResult;
    }

    /**
     * @param OpportunityItem $AddOrUpdateOpportunityItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateOpportunityItemResponse
     */
    public function setAddOrUpdateOpportunityItemResult(OpportunityItem $AddOrUpdateOpportunityItemResult)
    {
        $this->AddOrUpdateOpportunityItemResult = $AddOrUpdateOpportunityItemResult;
        return $this;
    }

}
