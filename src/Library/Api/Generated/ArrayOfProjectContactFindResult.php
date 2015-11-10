<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectContactFindResult
{

    /**
     * @var ProjectContactFindResult[] $ProjectContactFindResult
     */
    protected $ProjectContactFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectContactFindResult[]
     */
    public function getProjectContactFindResult()
    {
        return $this->ProjectContactFindResult;
    }

    /**
     * @param ProjectContactFindResult[] $ProjectContactFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectContactFindResult
     */
    public function setProjectContactFindResult(array $ProjectContactFindResult)
    {
        $this->ProjectContactFindResult = $ProjectContactFindResult;
        return $this;
    }

}
