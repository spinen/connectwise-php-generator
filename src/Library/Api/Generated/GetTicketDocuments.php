<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetTicketDocuments
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
     * @param ApiCredentials $credentials
     * @param int $ticketId
     */
    public function __construct(ApiCredentials $credentials = null, $ticketId = null)
    {
        $this->credentials = $credentials;
        $this->ticketId    = $ticketId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetTicketDocuments
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetTicketDocuments
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

}
