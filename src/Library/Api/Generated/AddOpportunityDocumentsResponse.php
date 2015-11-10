<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOpportunityDocumentsResponse
{

    /**
     * @var ArrayOfOppDocumentInfo $AddOpportunityDocumentsResult
     */
    protected $AddOpportunityDocumentsResult = null;

    /**
     * @param ArrayOfOppDocumentInfo $AddOpportunityDocumentsResult
     */
    public function __construct($AddOpportunityDocumentsResult = null)
    {
        $this->AddOpportunityDocumentsResult = $AddOpportunityDocumentsResult;
    }

    /**
     * @return ArrayOfOppDocumentInfo
     */
    public function getAddOpportunityDocumentsResult()
    {
        return $this->AddOpportunityDocumentsResult;
    }

    /**
     * @param ArrayOfOppDocumentInfo $AddOpportunityDocumentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityDocumentsResponse
     */
    public function setAddOpportunityDocumentsResult($AddOpportunityDocumentsResult)
    {
        $this->AddOpportunityDocumentsResult = $AddOpportunityDocumentsResult;
        return $this;
    }

}
