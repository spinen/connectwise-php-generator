<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTicketNote
{

    /**
     * @var TicketNote[] $TicketNote
     */
    protected $TicketNote = null;

    public function __construct()
    {

    }

    /**
     * @return TicketNote[]
     */
    public function getTicketNote()
    {
        return $this->TicketNote;
    }

    /**
     * @param TicketNote[] $TicketNote
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTicketNote
     */
    public function setTicketNote(array $TicketNote)
    {
        $this->TicketNote = $TicketNote;
        return $this;
    }

}
