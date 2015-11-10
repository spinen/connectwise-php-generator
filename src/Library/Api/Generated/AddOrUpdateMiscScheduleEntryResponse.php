<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateMiscScheduleEntryResponse
{

    /**
     * @var MiscScheduleEntry $AddOrUpdateMiscScheduleEntryResult
     */
    protected $AddOrUpdateMiscScheduleEntryResult = null;

    /**
     * @param MiscScheduleEntry $AddOrUpdateMiscScheduleEntryResult
     */
    public function __construct(MiscScheduleEntry $AddOrUpdateMiscScheduleEntryResult = null)
    {
        $this->AddOrUpdateMiscScheduleEntryResult = $AddOrUpdateMiscScheduleEntryResult;
    }

    /**
     * @return MiscScheduleEntry
     */
    public function getAddOrUpdateMiscScheduleEntryResult()
    {
        return $this->AddOrUpdateMiscScheduleEntryResult;
    }

    /**
     * @param MiscScheduleEntry $AddOrUpdateMiscScheduleEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateMiscScheduleEntryResponse
     */
    public function setAddOrUpdateMiscScheduleEntryResult(MiscScheduleEntry $AddOrUpdateMiscScheduleEntryResult)
    {
        $this->AddOrUpdateMiscScheduleEntryResult = $AddOrUpdateMiscScheduleEntryResult;
        return $this;
    }

}
