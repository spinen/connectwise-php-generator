<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOpportunityDocuments
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $opportunityId
     */
    protected $opportunityId = null;

    /**
     * @var ArrayOfOppDocumentInfo $opportunityDocument
     */
    protected $opportunityDocument = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $opportunityId
     * @param ArrayOfOppDocumentInfo $opportunityDocument
     */
    public function __construct(ApiCredentials $credentials = null, $opportunityId = null, $opportunityDocument = null)
    {
        $this->credentials         = $credentials;
        $this->opportunityId       = $opportunityId;
        $this->opportunityDocument = $opportunityDocument;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityDocuments
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * @param int $opportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityDocuments
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

    /**
     * @return ArrayOfOppDocumentInfo
     */
    public function getOpportunityDocument()
    {
        return $this->opportunityDocument;
    }

    /**
     * @param ArrayOfOppDocumentInfo $opportunityDocument
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityDocuments
     */
    public function setOpportunityDocument($opportunityDocument)
    {
        $this->opportunityDocument = $opportunityDocument;
        return $this;
    }

}
