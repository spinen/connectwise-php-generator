<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfTimeEntryFindResult
{

    /**
     * @var TimeEntryFindResult[] $TimeEntryFindResult
     */
    protected $TimeEntryFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return TimeEntryFindResult[]
     */
    public function getTimeEntryFindResult()
    {
        return $this->TimeEntryFindResult;
    }

    /**
     * @param TimeEntryFindResult[] $TimeEntryFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfTimeEntryFindResult
     */
    public function setTimeEntryFindResult(array $TimeEntryFindResult = null)
    {
        $this->TimeEntryFindResult = $TimeEntryFindResult;
        return $this;
    }

}
