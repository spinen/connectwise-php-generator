<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectResponse
{

    /**
     * @var Project $AddOrUpdateProjectResult
     */
    protected $AddOrUpdateProjectResult = null;

    /**
     * @param Project $AddOrUpdateProjectResult
     */
    public function __construct(Project $AddOrUpdateProjectResult = null)
    {
        $this->AddOrUpdateProjectResult = $AddOrUpdateProjectResult;
    }

    /**
     * @return Project
     */
    public function getAddOrUpdateProjectResult()
    {
        return $this->AddOrUpdateProjectResult;
    }

    /**
     * @param Project $AddOrUpdateProjectResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectResponse
     */
    public function setAddOrUpdateProjectResult(Project $AddOrUpdateProjectResult)
    {
        $this->AddOrUpdateProjectResult = $AddOrUpdateProjectResult;
        return $this;
    }

}
