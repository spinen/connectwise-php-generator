<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateActivityScheduleEntry
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ActivityScheduleEntry $schedule
     */
    protected $schedule = null;

    /**
     * @param ApiCredentials $credentials
     * @param ActivityScheduleEntry $schedule
     */
    public function __construct(ApiCredentials $credentials = null, ActivityScheduleEntry $schedule = null)
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateActivityScheduleEntry
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ActivityScheduleEntry
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param ActivityScheduleEntry $schedule
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateActivityScheduleEntry
     */
    public function setSchedule(ActivityScheduleEntry $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

}
