<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindOpportunitiesResponse
{

    /**
     * @var ArrayOfOpportunityFindResult $FindOpportunitiesResult
     */
    protected $FindOpportunitiesResult = null;

    /**
     * @param ArrayOfOpportunityFindResult $FindOpportunitiesResult
     */
    public function __construct($FindOpportunitiesResult = null)
    {
        $this->FindOpportunitiesResult = $FindOpportunitiesResult;
    }

    /**
     * @return ArrayOfOpportunityFindResult
     */
    public function getFindOpportunitiesResult()
    {
        return $this->FindOpportunitiesResult;
    }

    /**
     * @param ArrayOfOpportunityFindResult $FindOpportunitiesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindOpportunitiesResponse
     */
    public function setFindOpportunitiesResult($FindOpportunitiesResult)
    {
        $this->FindOpportunitiesResult = $FindOpportunitiesResult;
        return $this;
    }

}
