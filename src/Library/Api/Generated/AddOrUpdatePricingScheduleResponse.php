<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePricingScheduleResponse
{

    /**
     * @var PricingSchedule $AddOrUpdatePricingScheduleResult
     */
    protected $AddOrUpdatePricingScheduleResult = null;

    /**
     * @param PricingSchedule $AddOrUpdatePricingScheduleResult
     */
    public function __construct(PricingSchedule $AddOrUpdatePricingScheduleResult = null)
    {
        $this->AddOrUpdatePricingScheduleResult = $AddOrUpdatePricingScheduleResult;
    }

    /**
     * @return PricingSchedule
     */
    public function getAddOrUpdatePricingScheduleResult()
    {
        return $this->AddOrUpdatePricingScheduleResult;
    }

    /**
     * @param PricingSchedule $AddOrUpdatePricingScheduleResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePricingScheduleResponse
     */
    public function setAddOrUpdatePricingScheduleResult(PricingSchedule $AddOrUpdatePricingScheduleResult)
    {
        $this->AddOrUpdatePricingScheduleResult = $AddOrUpdatePricingScheduleResult;
        return $this;
    }

}
