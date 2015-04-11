<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateTicketNoteResponse
{

    /**
     * @var TicketNote $AddOrUpdateTicketNoteResult
     */
    protected $AddOrUpdateTicketNoteResult = null;

    /**
     * @param TicketNote $AddOrUpdateTicketNoteResult
     */
    public function __construct(TicketNote $AddOrUpdateTicketNoteResult = null)
    {
        $this->AddOrUpdateTicketNoteResult = $AddOrUpdateTicketNoteResult;
    }

    /**
     * @return TicketNote
     */
    public function getAddOrUpdateTicketNoteResult()
    {
        return $this->AddOrUpdateTicketNoteResult;
    }

    /**
     * @param TicketNote $AddOrUpdateTicketNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketNoteResponse
     */
    public function setAddOrUpdateTicketNoteResult(TicketNote $AddOrUpdateTicketNoteResult)
    {
        $this->AddOrUpdateTicketNoteResult = $AddOrUpdateTicketNoteResult;
        return $this;
    }

}
