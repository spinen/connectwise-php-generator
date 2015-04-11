<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadTimeEntryResponse
{

    /**
     * @var TimeEntry $LoadTimeEntryResult
     */
    protected $LoadTimeEntryResult = null;

    /**
     * @param TimeEntry $LoadTimeEntryResult
     */
    public function __construct(TimeEntry $LoadTimeEntryResult = null)
    {
        $this->LoadTimeEntryResult = $LoadTimeEntryResult;
    }

    /**
     * @return TimeEntry
     */
    public function getLoadTimeEntryResult()
    {
        return $this->LoadTimeEntryResult;
    }

    /**
     * @param TimeEntry $LoadTimeEntryResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadTimeEntryResponse
     */
    public function setLoadTimeEntryResult(TimeEntry $LoadTimeEntryResult)
    {
        $this->LoadTimeEntryResult = $LoadTimeEntryResult;
        return $this;
    }

}
