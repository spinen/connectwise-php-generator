<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetTimeEntryResponse
{

    /**
     * @var TimeEntry $GetTimeEntryResult
     */
    protected $GetTimeEntryResult = null;

    /**
     * @param TimeEntry $GetTimeEntryResult
     */
    public function __construct(TimeEntry $GetTimeEntryResult = null)
    {
        $this->GetTimeEntryResult = $GetTimeEntryResult;
    }

    /**
     * @return TimeEntry
     */
    public function getGetTimeEntryResult()
    {
        return $this->GetTimeEntryResult;
    }

    /**
     * @param TimeEntry $GetTimeEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetTimeEntryResponse
     */
    public function setGetTimeEntryResult(TimeEntry $GetTimeEntryResult)
    {
        $this->GetTimeEntryResult = $GetTimeEntryResult;
        return $this;
    }

}
