<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateForecastAndRecurringRevenueResponse
{

    /**
     * @var ForecastRevenueInfo $UpdateForecastAndRecurringRevenueResult
     */
    protected $UpdateForecastAndRecurringRevenueResult = null;

    /**
     * @param ForecastRevenueInfo $UpdateForecastAndRecurringRevenueResult
     */
    public function __construct(ForecastRevenueInfo $UpdateForecastAndRecurringRevenueResult = null)
    {
        $this->UpdateForecastAndRecurringRevenueResult = $UpdateForecastAndRecurringRevenueResult;
    }

    /**
     * @return ForecastRevenueInfo
     */
    public function getUpdateForecastAndRecurringRevenueResult()
    {
        return $this->UpdateForecastAndRecurringRevenueResult;
    }

    /**
     * @param ForecastRevenueInfo $UpdateForecastAndRecurringRevenueResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateForecastAndRecurringRevenueResponse
     */
    public function setUpdateForecastAndRecurringRevenueResult(ForecastRevenueInfo $UpdateForecastAndRecurringRevenueResult)
    {
        $this->UpdateForecastAndRecurringRevenueResult = $UpdateForecastAndRecurringRevenueResult;
        return $this;
    }

}
