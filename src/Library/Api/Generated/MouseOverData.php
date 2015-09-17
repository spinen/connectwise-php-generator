<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class MouseOverData
{

    /**
     * @var LongDescription $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var boolean $IsTicketStatusLoaded
     */
    protected $IsTicketStatusLoaded = null;

    /**
     * @param boolean $IsTicketStatusLoaded
     */
    public function __construct($IsTicketStatusLoaded = null)
    {
        $this->IsTicketStatusLoaded = $IsTicketStatusLoaded;
    }

    /**
     * @return LongDescription
     */
    public function getTicketStatus()
    {
        return $this->TicketStatus;
    }

    /**
     * @param LongDescription $TicketStatus
     * @return \Spinen\ConnectWise\Library\Api\Generated\MouseOverData
     */
    public function setTicketStatus(LongDescription $TicketStatus)
    {
        $this->TicketStatus = $TicketStatus;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTicketStatusLoaded()
    {
        return $this->IsTicketStatusLoaded;
    }

    /**
     * @param boolean $IsTicketStatusLoaded
     * @return \Spinen\ConnectWise\Library\Api\Generated\MouseOverData
     */
    public function setIsTicketStatusLoaded($IsTicketStatusLoaded)
    {
        $this->IsTicketStatusLoaded = $IsTicketStatusLoaded;
        return $this;
    }

}
