<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindScheduleEntriesResponse
{

    /**
     * @var ArrayOfScheduleEntryFindResult $FindScheduleEntriesResult
     */
    protected $FindScheduleEntriesResult = null;

    /**
     * @param ArrayOfScheduleEntryFindResult $FindScheduleEntriesResult
     */
    public function __construct($FindScheduleEntriesResult = null)
    {
        $this->FindScheduleEntriesResult = $FindScheduleEntriesResult;
    }

    /**
     * @return ArrayOfScheduleEntryFindResult
     */
    public function getFindScheduleEntriesResult()
    {
        return $this->FindScheduleEntriesResult;
    }

    /**
     * @param ArrayOfScheduleEntryFindResult $FindScheduleEntriesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindScheduleEntriesResponse
     */
    public function setFindScheduleEntriesResult($FindScheduleEntriesResult)
    {
        $this->FindScheduleEntriesResult = $FindScheduleEntriesResult;
        return $this;
    }

}
