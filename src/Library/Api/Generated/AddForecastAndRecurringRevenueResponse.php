<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddForecastAndRecurringRevenueResponse
{

    /**
     * @var ForecastRevenueInfo $AddForecastAndRecurringRevenueResult
     */
    protected $AddForecastAndRecurringRevenueResult = null;

    /**
     * @param ForecastRevenueInfo $AddForecastAndRecurringRevenueResult
     */
    public function __construct(ForecastRevenueInfo $AddForecastAndRecurringRevenueResult = null)
    {
        $this->AddForecastAndRecurringRevenueResult = $AddForecastAndRecurringRevenueResult;
    }

    /**
     * @return ForecastRevenueInfo
     */
    public function getAddForecastAndRecurringRevenueResult()
    {
        return $this->AddForecastAndRecurringRevenueResult;
    }

    /**
     * @param ForecastRevenueInfo $AddForecastAndRecurringRevenueResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddForecastAndRecurringRevenueResponse
     */
    public function setAddForecastAndRecurringRevenueResult(ForecastRevenueInfo $AddForecastAndRecurringRevenueResult)
    {
        $this->AddForecastAndRecurringRevenueResult = $AddForecastAndRecurringRevenueResult;
        return $this;
    }

}
