<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectPhaseResponse
{

    /**
     * @var ProjectPhase $GetProjectPhaseResult
     */
    protected $GetProjectPhaseResult = null;

    /**
     * @param ProjectPhase $GetProjectPhaseResult
     */
    public function __construct(ProjectPhase $GetProjectPhaseResult = null)
    {
        $this->GetProjectPhaseResult = $GetProjectPhaseResult;
    }

    /**
     * @return ProjectPhase
     */
    public function getGetProjectPhaseResult()
    {
        return $this->GetProjectPhaseResult;
    }

    /**
     * @param ProjectPhase $GetProjectPhaseResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectPhaseResponse
     */
    public function setGetProjectPhaseResult(ProjectPhase $GetProjectPhaseResult)
    {
        $this->GetProjectPhaseResult = $GetProjectPhaseResult;
        return $this;
    }

}
