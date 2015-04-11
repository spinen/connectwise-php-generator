<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectPhaseResponse
{

    /**
     * @var ProjectPhase $AddOrUpdateProjectPhaseResult
     */
    protected $AddOrUpdateProjectPhaseResult = null;

    /**
     * @param ProjectPhase $AddOrUpdateProjectPhaseResult
     */
    public function __construct(ProjectPhase $AddOrUpdateProjectPhaseResult = null)
    {
        $this->AddOrUpdateProjectPhaseResult = $AddOrUpdateProjectPhaseResult;
    }

    /**
     * @return ProjectPhase
     */
    public function getAddOrUpdateProjectPhaseResult()
    {
        return $this->AddOrUpdateProjectPhaseResult;
    }

    /**
     * @param ProjectPhase $AddOrUpdateProjectPhaseResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectPhaseResponse
     */
    public function setAddOrUpdateProjectPhaseResult(ProjectPhase $AddOrUpdateProjectPhaseResult)
    {
        $this->AddOrUpdateProjectPhaseResult = $AddOrUpdateProjectPhaseResult;
        return $this;
    }

}
