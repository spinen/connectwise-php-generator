<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddTicketDocumentsResponse
{

    /**
     * @var ArrayOfDocumentInfo $AddTicketDocumentsResult
     */
    protected $AddTicketDocumentsResult = null;

    /**
     * @param ArrayOfDocumentInfo $AddTicketDocumentsResult
     */
    public function __construct($AddTicketDocumentsResult = null)
    {
        $this->AddTicketDocumentsResult = $AddTicketDocumentsResult;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getAddTicketDocumentsResult()
    {
        return $this->AddTicketDocumentsResult;
    }

    /**
     * @param ArrayOfDocumentInfo $AddTicketDocumentsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketDocumentsResponse
     */
    public function setAddTicketDocumentsResult($AddTicketDocumentsResult)
    {
        $this->AddTicketDocumentsResult = $AddTicketDocumentsResult;
        return $this;
    }

}
