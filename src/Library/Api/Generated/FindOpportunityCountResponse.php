<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindOpportunityCountResponse
{

    /**
     * @var int $FindOpportunityCountResult
     */
    protected $FindOpportunityCountResult = null;

    /**
     * @param int $FindOpportunityCountResult
     */
    public function __construct($FindOpportunityCountResult = null)
    {
        $this->FindOpportunityCountResult = $FindOpportunityCountResult;
    }

    /**
     * @return int
     */
    public function getFindOpportunityCountResult()
    {
        return $this->FindOpportunityCountResult;
    }

    /**
     * @param int $FindOpportunityCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindOpportunityCountResponse
     */
    public function setFindOpportunityCountResult($FindOpportunityCountResult)
    {
        $this->FindOpportunityCountResult = $FindOpportunityCountResult;
        return $this;
    }

}
