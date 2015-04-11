<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateTicketNote
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var TicketNote $note
     */
    protected $note = null;

    /**
     * @var int $ticketId
     */
    protected $ticketId = null;

    /**
     * @param ApiCredentials $credentials
     * @param TicketNote $note
     * @param int $ticketId
     */
    public function __construct(ApiCredentials $credentials = null, TicketNote $note = null, $ticketId = null)
    {
        $this->credentials = $credentials;
        $this->note        = $note;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketNote
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return TicketNote
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param TicketNote $note
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketNote
     */
    public function setNote(TicketNote $note)
    {
        $this->note = $note;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketNote
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

}
