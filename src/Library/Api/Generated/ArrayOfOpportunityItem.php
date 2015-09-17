<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfOpportunityItem
{

    /**
     * @var OpportunityItem[] $OpportunityItem
     */
    protected $OpportunityItem = null;

    public function __construct()
    {

    }

    /**
     * @return OpportunityItem[]
     */
    public function getOpportunityItem()
    {
        return $this->OpportunityItem;
    }

    /**
     * @param OpportunityItem[] $OpportunityItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfOpportunityItem
     */
    public function setOpportunityItem(array $OpportunityItem = null)
    {
        $this->OpportunityItem = $OpportunityItem;
        return $this;
    }

}
