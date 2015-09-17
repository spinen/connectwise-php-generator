<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfOpportunityFindResult
{

    /**
     * @var OpportunityFindResult[] $OpportunityFindResult
     */
    protected $OpportunityFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return OpportunityFindResult[]
     */
    public function getOpportunityFindResult()
    {
        return $this->OpportunityFindResult;
    }

    /**
     * @param OpportunityFindResult[] $OpportunityFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfOpportunityFindResult
     */
    public function setOpportunityFindResult(array $OpportunityFindResult = null)
    {
        $this->OpportunityFindResult = $OpportunityFindResult;
        return $this;
    }

}
