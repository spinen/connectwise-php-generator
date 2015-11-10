<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetActivityScheduleEntryResponse
{

    /**
     * @var ActivityScheduleEntry $GetActivityScheduleEntryResult
     */
    protected $GetActivityScheduleEntryResult = null;

    /**
     * @param ActivityScheduleEntry $GetActivityScheduleEntryResult
     */
    public function __construct(ActivityScheduleEntry $GetActivityScheduleEntryResult = null)
    {
        $this->GetActivityScheduleEntryResult = $GetActivityScheduleEntryResult;
    }

    /**
     * @return ActivityScheduleEntry
     */
    public function getGetActivityScheduleEntryResult()
    {
        return $this->GetActivityScheduleEntryResult;
    }

    /**
     * @param ActivityScheduleEntry $GetActivityScheduleEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetActivityScheduleEntryResponse
     */
    public function setGetActivityScheduleEntryResult(ActivityScheduleEntry $GetActivityScheduleEntryResult)
    {
        $this->GetActivityScheduleEntryResult = $GetActivityScheduleEntryResult;
        return $this;
    }

}
