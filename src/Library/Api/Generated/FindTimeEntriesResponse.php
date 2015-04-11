<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindTimeEntriesResponse
{

    /**
     * @var ArrayOfTimeEntryFindResult $FindTimeEntriesResult
     */
    protected $FindTimeEntriesResult = null;

    /**
     * @param ArrayOfTimeEntryFindResult $FindTimeEntriesResult
     */
    public function __construct($FindTimeEntriesResult = null)
    {
        $this->FindTimeEntriesResult = $FindTimeEntriesResult;
    }

    /**
     * @return ArrayOfTimeEntryFindResult
     */
    public function getFindTimeEntriesResult()
    {
        return $this->FindTimeEntriesResult;
    }

    /**
     * @param ArrayOfTimeEntryFindResult $FindTimeEntriesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindTimeEntriesResponse
     */
    public function setFindTimeEntriesResult($FindTimeEntriesResult)
    {
        $this->FindTimeEntriesResult = $FindTimeEntriesResult;
        return $this;
    }

}
