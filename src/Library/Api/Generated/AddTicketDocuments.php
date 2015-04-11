<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddTicketDocuments
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $ticketId
     */
    protected $ticketId = null;

    /**
     * @var ArrayOfDocumentInfo $ticketDocumentsInfo
     */
    protected $ticketDocumentsInfo = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $ticketId
     * @param ArrayOfDocumentInfo $ticketDocumentsInfo
     */
    public function __construct(ApiCredentials $credentials = null, $ticketId = null, $ticketDocumentsInfo = null)
    {
        $this->credentials         = $credentials;
        $this->ticketId            = $ticketId;
        $this->ticketDocumentsInfo = $ticketDocumentsInfo;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketDocuments
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketDocuments
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     * @return ArrayOfDocumentInfo
     */
    public function getTicketDocumentsInfo()
    {
        return $this->ticketDocumentsInfo;
    }

    /**
     * @param ArrayOfDocumentInfo $ticketDocumentsInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTicketDocuments
     */
    public function setTicketDocumentsInfo($ticketDocumentsInfo)
    {
        $this->ticketDocumentsInfo = $ticketDocumentsInfo;
        return $this;
    }

}
