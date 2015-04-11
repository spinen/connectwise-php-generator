<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetTicketDocumentsResponse
{

    /**
     * @var ArrayOfDocumentInfo $GetTicketDocumentsResult
     */
    protected $GetTicketDocumentsResult = null;

    /**
     * @param ArrayOfDocumentInfo $GetTicketDocumentsResult
     */
    public function __construct($GetTicketDocumentsResult = null)
    {
        $this->GetTicketDocumentsResult = $GetTicketDocumentsResult;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getGetTicketDocumentsResult()
    {
        return $this->GetTicketDocumentsResult;
    }

    /**
     * @param ArrayOfDocumentInfo $GetTicketDocumentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetTicketDocumentsResponse
     */
    public function setGetTicketDocumentsResult($GetTicketDocumentsResult)
    {
        $this->GetTicketDocumentsResult = $GetTicketDocumentsResult;
        return $this;
    }

}
