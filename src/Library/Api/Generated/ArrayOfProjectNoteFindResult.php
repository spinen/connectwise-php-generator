<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfProjectNoteFindResult
{

    /**
     * @var ProjectNoteFindResult[] $ProjectNoteFindResult
     */
    protected $ProjectNoteFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return ProjectNoteFindResult[]
     */
    public function getProjectNoteFindResult()
    {
        return $this->ProjectNoteFindResult;
    }

    /**
     * @param ProjectNoteFindResult[] $ProjectNoteFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfProjectNoteFindResult
     */
    public function setProjectNoteFindResult(array $ProjectNoteFindResult = null)
    {
        $this->ProjectNoteFindResult = $ProjectNoteFindResult;
        return $this;
    }

}
