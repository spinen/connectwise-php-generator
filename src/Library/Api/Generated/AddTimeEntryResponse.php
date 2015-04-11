<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddTimeEntryResponse
{

    /**
     * @var TimeEntry $AddTimeEntryResult
     */
    protected $AddTimeEntryResult = null;

    /**
     * @param TimeEntry $AddTimeEntryResult
     */
    public function __construct(TimeEntry $AddTimeEntryResult = null)
    {
        $this->AddTimeEntryResult = $AddTimeEntryResult;
    }

    /**
     * @return TimeEntry
     */
    public function getAddTimeEntryResult()
    {
        return $this->AddTimeEntryResult;
    }

    /**
     * @param TimeEntry $AddTimeEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddTimeEntryResponse
     */
    public function setAddTimeEntryResult(TimeEntry $AddTimeEntryResult)
    {
        $this->AddTimeEntryResult = $AddTimeEntryResult;
        return $this;
    }

}
