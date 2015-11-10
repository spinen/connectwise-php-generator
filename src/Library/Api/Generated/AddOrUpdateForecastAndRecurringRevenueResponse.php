<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateForecastAndRecurringRevenueResponse
{

    /**
     * @var ForecastRevenueInfo $AddOrUpdateForecastAndRecurringRevenueResult
     */
    protected $AddOrUpdateForecastAndRecurringRevenueResult = null;

    /**
     * @param ForecastRevenueInfo $AddOrUpdateForecastAndRecurringRevenueResult
     */
    public function __construct(ForecastRevenueInfo $AddOrUpdateForecastAndRecurringRevenueResult = null)
    {
        $this->AddOrUpdateForecastAndRecurringRevenueResult = $AddOrUpdateForecastAndRecurringRevenueResult;
    }

    /**
     * @return ForecastRevenueInfo
     */
    public function getAddOrUpdateForecastAndRecurringRevenueResult()
    {
        return $this->AddOrUpdateForecastAndRecurringRevenueResult;
    }

    /**
     * @param ForecastRevenueInfo $AddOrUpdateForecastAndRecurringRevenueResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateForecastAndRecurringRevenueResponse
     */
    public function setAddOrUpdateForecastAndRecurringRevenueResult(ForecastRevenueInfo $AddOrUpdateForecastAndRecurringRevenueResult)
    {
        $this->AddOrUpdateForecastAndRecurringRevenueResult = $AddOrUpdateForecastAndRecurringRevenueResult;
        return $this;
    }

}
