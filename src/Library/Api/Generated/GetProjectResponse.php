<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectResponse
{

    /**
     * @var Project $GetProjectResult
     */
    protected $GetProjectResult = null;

    /**
     * @param Project $GetProjectResult
     */
    public function __construct(Project $GetProjectResult = null)
    {
        $this->GetProjectResult = $GetProjectResult;
    }

    /**
     * @return Project
     */
    public function getGetProjectResult()
    {
        return $this->GetProjectResult;
    }

    /**
     * @param Project $GetProjectResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectResponse
     */
    public function setGetProjectResult(Project $GetProjectResult)
    {
        $this->GetProjectResult = $GetProjectResult;
        return $this;
    }

}
