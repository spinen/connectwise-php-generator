<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTicketFindResult
{

    /**
     * @var TicketFindResult[] $TicketFindResult
     */
    protected $TicketFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return TicketFindResult[]
     */
    public function getTicketFindResult()
    {
        return $this->TicketFindResult;
    }

    /**
     * @param TicketFindResult[] $TicketFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTicketFindResult
     */
    public function setTicketFindResult(array $TicketFindResult = null)
    {
        $this->TicketFindResult = $TicketFindResult;
        return $this;
    }

}
