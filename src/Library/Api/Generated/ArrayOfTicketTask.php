<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTicketTask
{

    /**
     * @var TicketTask[] $TicketTask
     */
    protected $TicketTask = null;

    public function __construct()
    {

    }

    /**
     * @return TicketTask[]
     */
    public function getTicketTask()
    {
        return $this->TicketTask;
    }

    /**
     * @param TicketTask[] $TicketTask
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTicketTask
     */
    public function setTicketTask(array $TicketTask = null)
    {
        $this->TicketTask = $TicketTask;
        return $this;
    }

}
