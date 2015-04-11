<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTicketConfiguration
{

    /**
     * @var TicketConfiguration[] $TicketConfiguration
     */
    protected $TicketConfiguration = null;

    public function __construct()
    {

    }

    /**
     * @return TicketConfiguration[]
     */
    public function getTicketConfiguration()
    {
        return $this->TicketConfiguration;
    }

    /**
     * @param TicketConfiguration[] $TicketConfiguration
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTicketConfiguration
     */
    public function setTicketConfiguration(array $TicketConfiguration)
    {
        $this->TicketConfiguration = $TicketConfiguration;
        return $this;
    }

}
