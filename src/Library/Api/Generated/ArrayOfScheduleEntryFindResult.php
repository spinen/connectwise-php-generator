<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfScheduleEntryFindResult
{

    /**
     * @var ScheduleEntryFindResult[] $ScheduleEntryFindResult
     */
    protected $ScheduleEntryFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ScheduleEntryFindResult[]
     */
    public function getScheduleEntryFindResult()
    {
        return $this->ScheduleEntryFindResult;
    }

    /**
     * @param ScheduleEntryFindResult[] $ScheduleEntryFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfScheduleEntryFindResult
     */
    public function setScheduleEntryFindResult(array $ScheduleEntryFindResult = null)
    {
        $this->ScheduleEntryFindResult = $ScheduleEntryFindResult;
        return $this;
    }

}
