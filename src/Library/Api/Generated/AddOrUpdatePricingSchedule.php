<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePricingSchedule
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var PricingSchedule $pricingSchedule
     */
    protected $pricingSchedule = null;

    /**
     * @param ApiCredentials $credentials
     * @param PricingSchedule $pricingSchedule
     */
    public function __construct(ApiCredentials $credentials = null, PricingSchedule $pricingSchedule = null)
    {
        $this->credentials     = $credentials;
        $this->pricingSchedule = $pricingSchedule;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePricingSchedule
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return PricingSchedule
     */
    public function getPricingSchedule()
    {
        return $this->pricingSchedule;
    }

    /**
     * @param PricingSchedule $pricingSchedule
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePricingSchedule
     */
    public function setPricingSchedule(PricingSchedule $pricingSchedule)
    {
        $this->pricingSchedule = $pricingSchedule;
        return $this;
    }

}
