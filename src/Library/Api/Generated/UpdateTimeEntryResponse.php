<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateTimeEntryResponse
{

    /**
     * @var TimeEntry $UpdateTimeEntryResult
     */
    protected $UpdateTimeEntryResult = null;

    /**
     * @param TimeEntry $UpdateTimeEntryResult
     */
    public function __construct(TimeEntry $UpdateTimeEntryResult = null)
    {
        $this->UpdateTimeEntryResult = $UpdateTimeEntryResult;
    }

    /**
     * @return TimeEntry
     */
    public function getUpdateTimeEntryResult()
    {
        return $this->UpdateTimeEntryResult;
    }

    /**
     * @param TimeEntry $UpdateTimeEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateTimeEntryResponse
     */
    public function setUpdateTimeEntryResult(TimeEntry $UpdateTimeEntryResult)
    {
        $this->UpdateTimeEntryResult = $UpdateTimeEntryResult;
        return $this;
    }

}
