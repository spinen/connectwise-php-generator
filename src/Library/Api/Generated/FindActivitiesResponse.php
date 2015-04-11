<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindActivitiesResponse
{

    /**
     * @var ArrayOfActivityFindResult $FindActivitiesResult
     */
    protected $FindActivitiesResult = null;

    /**
     * @param ArrayOfActivityFindResult $FindActivitiesResult
     */
    public function __construct($FindActivitiesResult = null)
    {
        $this->FindActivitiesResult = $FindActivitiesResult;
    }

    /**
     * @return ArrayOfActivityFindResult
     */
    public function getFindActivitiesResult()
    {
        return $this->FindActivitiesResult;
    }

    /**
     * @param ArrayOfActivityFindResult $FindActivitiesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindActivitiesResponse
     */
    public function setFindActivitiesResult($FindActivitiesResult)
    {
        $this->FindActivitiesResult = $FindActivitiesResult;
        return $this;
    }

}
