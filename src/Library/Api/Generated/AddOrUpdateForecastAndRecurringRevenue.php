<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateForecastAndRecurringRevenue
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ForecastRevenueInfo $forecastRevenueInfo
     */
    protected $forecastRevenueInfo = null;

    /**
     * @param ApiCredentials $credentials
     * @param ForecastRevenueInfo $forecastRevenueInfo
     */
    public function __construct(ApiCredentials $credentials = null, ForecastRevenueInfo $forecastRevenueInfo = null)
    {
        $this->credentials         = $credentials;
        $this->forecastRevenueInfo = $forecastRevenueInfo;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateForecastAndRecurringRevenue
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ForecastRevenueInfo
     */
    public function getForecastRevenueInfo()
    {
        return $this->forecastRevenueInfo;
    }

    /**
     * @param ForecastRevenueInfo $forecastRevenueInfo
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateForecastAndRecurringRevenue
     */
    public function setForecastRevenueInfo(ForecastRevenueInfo $forecastRevenueInfo)
    {
        $this->forecastRevenueInfo = $forecastRevenueInfo;
        return $this;
    }

}
