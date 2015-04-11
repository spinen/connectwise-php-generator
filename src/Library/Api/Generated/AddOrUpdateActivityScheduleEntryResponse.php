<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateActivityScheduleEntryResponse
{

    /**
     * @var ActivityScheduleEntry $AddOrUpdateActivityScheduleEntryResult
     */
    protected $AddOrUpdateActivityScheduleEntryResult = null;

    /**
     * @param ActivityScheduleEntry $AddOrUpdateActivityScheduleEntryResult
     */
    public function __construct(ActivityScheduleEntry $AddOrUpdateActivityScheduleEntryResult = null)
    {
        $this->AddOrUpdateActivityScheduleEntryResult = $AddOrUpdateActivityScheduleEntryResult;
    }

    /**
     * @return ActivityScheduleEntry
     */
    public function getAddOrUpdateActivityScheduleEntryResult()
    {
        return $this->AddOrUpdateActivityScheduleEntryResult;
    }

    /**
     * @param ActivityScheduleEntry $AddOrUpdateActivityScheduleEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateActivityScheduleEntryResponse
     */
    public function setAddOrUpdateActivityScheduleEntryResult(ActivityScheduleEntry $AddOrUpdateActivityScheduleEntryResult)
    {
        $this->AddOrUpdateActivityScheduleEntryResult = $AddOrUpdateActivityScheduleEntryResult;
        return $this;
    }

}
