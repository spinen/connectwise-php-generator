<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectFindResult
{

    /**
     * @var ProjectFindResult[] $ProjectFindResult
     */
    protected $ProjectFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectFindResult[]
     */
    public function getProjectFindResult()
    {
        return $this->ProjectFindResult;
    }

    /**
     * @param ProjectFindResult[] $ProjectFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectFindResult
     */
    public function setProjectFindResult(array $ProjectFindResult = null)
    {
        $this->ProjectFindResult = $ProjectFindResult;
        return $this;
    }

}
