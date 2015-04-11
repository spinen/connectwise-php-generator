<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateTimeEntryResponse
{

    /**
     * @var TimeEntry $AddOrUpdateTimeEntryResult
     */
    protected $AddOrUpdateTimeEntryResult = null;

    /**
     * @param TimeEntry $AddOrUpdateTimeEntryResult
     */
    public function __construct(TimeEntry $AddOrUpdateTimeEntryResult = null)
    {
        $this->AddOrUpdateTimeEntryResult = $AddOrUpdateTimeEntryResult;
    }

    /**
     * @return TimeEntry
     */
    public function getAddOrUpdateTimeEntryResult()
    {
        return $this->AddOrUpdateTimeEntryResult;
    }

    /**
     * @param TimeEntry $AddOrUpdateTimeEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateTimeEntryResponse
     */
    public function setAddOrUpdateTimeEntryResult(TimeEntry $AddOrUpdateTimeEntryResult)
    {
        $this->AddOrUpdateTimeEntryResult = $AddOrUpdateTimeEntryResult;
        return $this;
    }

}
