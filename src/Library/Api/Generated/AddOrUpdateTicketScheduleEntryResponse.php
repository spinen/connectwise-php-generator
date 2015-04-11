<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateTicketScheduleEntryResponse
{

    /**
     * @var TicketScheduleEntry $AddOrUpdateTicketScheduleEntryResult
     */
    protected $AddOrUpdateTicketScheduleEntryResult = null;

    /**
     * @param TicketScheduleEntry $AddOrUpdateTicketScheduleEntryResult
     */
    public function __construct(TicketScheduleEntry $AddOrUpdateTicketScheduleEntryResult = null)
    {
        $this->AddOrUpdateTicketScheduleEntryResult = $AddOrUpdateTicketScheduleEntryResult;
    }

    /**
     * @return TicketScheduleEntry
     */
    public function getAddOrUpdateTicketScheduleEntryResult()
    {
        return $this->AddOrUpdateTicketScheduleEntryResult;
    }

    /**
     * @param TicketScheduleEntry $AddOrUpdateTicketScheduleEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketScheduleEntryResponse
     */
    public function setAddOrUpdateTicketScheduleEntryResult(TicketScheduleEntry $AddOrUpdateTicketScheduleEntryResult)
    {
        $this->AddOrUpdateTicketScheduleEntryResult = $AddOrUpdateTicketScheduleEntryResult;
        return $this;
    }

}
