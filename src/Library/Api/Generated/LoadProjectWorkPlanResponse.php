<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadProjectWorkPlanResponse
{

    /**
     * @var ProjectWorkPlan $LoadProjectWorkPlanResult
     */
    protected $LoadProjectWorkPlanResult = null;

    /**
     * @param ProjectWorkPlan $LoadProjectWorkPlanResult
     */
    public function __construct(ProjectWorkPlan $LoadProjectWorkPlanResult = null)
    {
        $this->LoadProjectWorkPlanResult = $LoadProjectWorkPlanResult;
    }

    /**
     * @return ProjectWorkPlan
     */
    public function getLoadProjectWorkPlanResult()
    {
        return $this->LoadProjectWorkPlanResult;
    }

    /**
     * @param ProjectWorkPlan $LoadProjectWorkPlanResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadProjectWorkPlanResponse
     */
    public function setLoadProjectWorkPlanResult(ProjectWorkPlan $LoadProjectWorkPlanResult)
    {
        $this->LoadProjectWorkPlanResult = $LoadProjectWorkPlanResult;
        return $this;
    }

}
