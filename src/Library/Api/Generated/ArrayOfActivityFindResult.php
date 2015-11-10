<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfActivityFindResult
{

    /**
     * @var ActivityFindResult[] $ActivityFindResult
     */
    protected $ActivityFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ActivityFindResult[]
     */
    public function getActivityFindResult()
    {
        return $this->ActivityFindResult;
    }

    /**
     * @param ActivityFindResult[] $ActivityFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfActivityFindResult
     */
    public function setActivityFindResult(array $ActivityFindResult)
    {
        $this->ActivityFindResult = $ActivityFindResult;
        return $this;
    }

}
