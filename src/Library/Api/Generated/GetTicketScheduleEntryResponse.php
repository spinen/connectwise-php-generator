<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetTicketScheduleEntryResponse
{

    /**
     * @var TicketScheduleEntry $GetTicketScheduleEntryResult
     */
    protected $GetTicketScheduleEntryResult = null;

    /**
     * @param TicketScheduleEntry $GetTicketScheduleEntryResult
     */
    public function __construct(TicketScheduleEntry $GetTicketScheduleEntryResult = null)
    {
        $this->GetTicketScheduleEntryResult = $GetTicketScheduleEntryResult;
    }

    /**
     * @return TicketScheduleEntry
     */
    public function getGetTicketScheduleEntryResult()
    {
        return $this->GetTicketScheduleEntryResult;
    }

    /**
     * @param TicketScheduleEntry $GetTicketScheduleEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetTicketScheduleEntryResponse
     */
    public function setGetTicketScheduleEntryResult(TicketScheduleEntry $GetTicketScheduleEntryResult)
    {
        $this->GetTicketScheduleEntryResult = $GetTicketScheduleEntryResult;
        return $this;
    }

}
