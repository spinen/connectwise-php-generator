<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectContactResponse
{

    /**
     * @var ProjectContact $GetProjectContactResult
     */
    protected $GetProjectContactResult = null;

    /**
     * @param ProjectContact $GetProjectContactResult
     */
    public function __construct(ProjectContact $GetProjectContactResult = null)
    {
        $this->GetProjectContactResult = $GetProjectContactResult;
    }

    /**
     * @return ProjectContact
     */
    public function getGetProjectContactResult()
    {
        return $this->GetProjectContactResult;
    }

    /**
     * @param ProjectContact $GetProjectContactResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectContactResponse
     */
    public function setGetProjectContactResult(ProjectContact $GetProjectContactResult)
    {
        $this->GetProjectContactResult = $GetProjectContactResult;
        return $this;
    }

}
