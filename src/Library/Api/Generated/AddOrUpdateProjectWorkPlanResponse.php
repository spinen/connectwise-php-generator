<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectWorkPlanResponse
{

    /**
     * @var ProjectWorkPlan $AddOrUpdateProjectWorkPlanResult
     */
    protected $AddOrUpdateProjectWorkPlanResult = null;

    /**
     * @param ProjectWorkPlan $AddOrUpdateProjectWorkPlanResult
     */
    public function __construct(ProjectWorkPlan $AddOrUpdateProjectWorkPlanResult = null)
    {
        $this->AddOrUpdateProjectWorkPlanResult = $AddOrUpdateProjectWorkPlanResult;
    }

    /**
     * @return ProjectWorkPlan
     */
    public function getAddOrUpdateProjectWorkPlanResult()
    {
        return $this->AddOrUpdateProjectWorkPlanResult;
    }

    /**
     * @param ProjectWorkPlan $AddOrUpdateProjectWorkPlanResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectWorkPlanResponse
     */
    public function setAddOrUpdateProjectWorkPlanResult(ProjectWorkPlan $AddOrUpdateProjectWorkPlanResult)
    {
        $this->AddOrUpdateProjectWorkPlanResult = $AddOrUpdateProjectWorkPlanResult;
        return $this;
    }

}
