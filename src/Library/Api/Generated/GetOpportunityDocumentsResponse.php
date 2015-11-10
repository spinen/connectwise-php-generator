<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetOpportunityDocumentsResponse
{

    /**
     * @var ArrayOfDocumentInfo $GetOpportunityDocumentsResult
     */
    protected $GetOpportunityDocumentsResult = null;

    /**
     * @param ArrayOfDocumentInfo $GetOpportunityDocumentsResult
     */
    public function __construct($GetOpportunityDocumentsResult = null)
    {
        $this->GetOpportunityDocumentsResult = $GetOpportunityDocumentsResult;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getGetOpportunityDocumentsResult()
    {
        return $this->GetOpportunityDocumentsResult;
    }

    /**
     * @param ArrayOfDocumentInfo $GetOpportunityDocumentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetOpportunityDocumentsResponse
     */
    public function setGetOpportunityDocumentsResult($GetOpportunityDocumentsResult)
    {
        $this->GetOpportunityDocumentsResult = $GetOpportunityDocumentsResult;
        return $this;
    }

}
