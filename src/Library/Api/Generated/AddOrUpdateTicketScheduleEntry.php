<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateTicketScheduleEntry
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var TicketScheduleEntry $schedule
     */
    protected $schedule = null;

    /**
     * @param ApiCredentials $credentials
     * @param TicketScheduleEntry $schedule
     */
    public function __construct(ApiCredentials $credentials = null, TicketScheduleEntry $schedule = null)
    {
        $this->credentials = $credentials;
        $this->schedule    = $schedule;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketScheduleEntry
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return TicketScheduleEntry
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param TicketScheduleEntry $schedule
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTicketScheduleEntry
     */
    public function setSchedule(TicketScheduleEntry $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

}
