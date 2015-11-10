<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePricingDetailResponse
{

    /**
     * @var PricingDetail $AddOrUpdatePricingDetailResult
     */
    protected $AddOrUpdatePricingDetailResult = null;

    /**
     * @param PricingDetail $AddOrUpdatePricingDetailResult
     */
    public function __construct(PricingDetail $AddOrUpdatePricingDetailResult = null)
    {
        $this->AddOrUpdatePricingDetailResult = $AddOrUpdatePricingDetailResult;
    }

    /**
     * @return PricingDetail
     */
    public function getAddOrUpdatePricingDetailResult()
    {
        return $this->AddOrUpdatePricingDetailResult;
    }

    /**
     * @param PricingDetail $AddOrUpdatePricingDetailResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePricingDetailResponse
     */
    public function setAddOrUpdatePricingDetailResult(PricingDetail $AddOrUpdatePricingDetailResult)
    {
        $this->AddOrUpdatePricingDetailResult = $AddOrUpdatePricingDetailResult;
        return $this;
    }

}
