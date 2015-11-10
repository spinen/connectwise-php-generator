<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPricingDetailResponse
{

    /**
     * @var PricingDetail $GetPricingDetailResult
     */
    protected $GetPricingDetailResult = null;

    /**
     * @param PricingDetail $GetPricingDetailResult
     */
    public function __construct(PricingDetail $GetPricingDetailResult = null)
    {
        $this->GetPricingDetailResult = $GetPricingDetailResult;
    }

    /**
     * @return PricingDetail
     */
    public function getGetPricingDetailResult()
    {
        return $this->GetPricingDetailResult;
    }

    /**
     * @param PricingDetail $GetPricingDetailResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPricingDetailResponse
     */
    public function setGetPricingDetailResult(PricingDetail $GetPricingDetailResult)
    {
        $this->GetPricingDetailResult = $GetPricingDetailResult;
        return $this;
    }

}
