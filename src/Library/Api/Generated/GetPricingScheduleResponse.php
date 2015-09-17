<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPricingScheduleResponse
{

    /**
     * @var PricingSchedule $GetPricingScheduleResult
     */
    protected $GetPricingScheduleResult = null;

    /**
     * @param PricingSchedule $GetPricingScheduleResult
     */
    public function __construct(PricingSchedule $GetPricingScheduleResult = null)
    {
        $this->GetPricingScheduleResult = $GetPricingScheduleResult;
    }

    /**
     * @return PricingSchedule
     */
    public function getGetPricingScheduleResult()
    {
        return $this->GetPricingScheduleResult;
    }

    /**
     * @param PricingSchedule $GetPricingScheduleResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPricingScheduleResponse
     */
    public function setGetPricingScheduleResult(PricingSchedule $GetPricingScheduleResult)
    {
        $this->GetPricingScheduleResult = $GetPricingScheduleResult;
        return $this;
    }

}
