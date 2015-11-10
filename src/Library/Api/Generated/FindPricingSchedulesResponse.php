<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindPricingSchedulesResponse
{

    /**
     * @var ArrayOfPricingSchedule $FindPricingSchedulesResult
     */
    protected $FindPricingSchedulesResult = null;

    /**
     * @param ArrayOfPricingSchedule $FindPricingSchedulesResult
     */
    public function __construct($FindPricingSchedulesResult = null)
    {
        $this->FindPricingSchedulesResult = $FindPricingSchedulesResult;
    }

    /**
     * @return ArrayOfPricingSchedule
     */
    public function getFindPricingSchedulesResult()
    {
        return $this->FindPricingSchedulesResult;
    }

    /**
     * @param ArrayOfPricingSchedule $FindPricingSchedulesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindPricingSchedulesResponse
     */
    public function setFindPricingSchedulesResult($FindPricingSchedulesResult)
    {
        $this->FindPricingSchedulesResult = $FindPricingSchedulesResult;
        return $this;
    }

}
