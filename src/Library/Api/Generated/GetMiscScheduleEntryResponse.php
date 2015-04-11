<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetMiscScheduleEntryResponse
{

    /**
     * @var MiscScheduleEntry $GetMiscScheduleEntryResult
     */
    protected $GetMiscScheduleEntryResult = null;

    /**
     * @param MiscScheduleEntry $GetMiscScheduleEntryResult
     */
    public function __construct(MiscScheduleEntry $GetMiscScheduleEntryResult = null)
    {
        $this->GetMiscScheduleEntryResult = $GetMiscScheduleEntryResult;
    }

    /**
     * @return MiscScheduleEntry
     */
    public function getGetMiscScheduleEntryResult()
    {
        return $this->GetMiscScheduleEntryResult;
    }

    /**
     * @param MiscScheduleEntry $GetMiscScheduleEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetMiscScheduleEntryResponse
     */
    public function setGetMiscScheduleEntryResult(MiscScheduleEntry $GetMiscScheduleEntryResult)
    {
        $this->GetMiscScheduleEntryResult = $GetMiscScheduleEntryResult;
        return $this;
    }

}
