<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectWorkPlanResponse
{

    /**
     * @var ProjectWorkPlan $GetProjectWorkPlanResult
     */
    protected $GetProjectWorkPlanResult = null;

    /**
     * @param ProjectWorkPlan $GetProjectWorkPlanResult
     */
    public function __construct(ProjectWorkPlan $GetProjectWorkPlanResult = null)
    {
        $this->GetProjectWorkPlanResult = $GetProjectWorkPlanResult;
    }

    /**
     * @return ProjectWorkPlan
     */
    public function getGetProjectWorkPlanResult()
    {
        return $this->GetProjectWorkPlanResult;
    }

    /**
     * @param ProjectWorkPlan $GetProjectWorkPlanResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectWorkPlanResponse
     */
    public function setGetProjectWorkPlanResult(ProjectWorkPlan $GetProjectWorkPlanResult)
    {
        $this->GetProjectWorkPlanResult = $GetProjectWorkPlanResult;
        return $this;
    }

}
