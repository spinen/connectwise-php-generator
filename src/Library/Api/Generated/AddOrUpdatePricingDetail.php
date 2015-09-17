<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePricingDetail
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var PricingDetail $pricingDetail
     */
    protected $pricingDetail = null;

    /**
     * @param ApiCredentials $credentials
     * @param PricingDetail $pricingDetail
     */
    public function __construct(ApiCredentials $credentials = null, PricingDetail $pricingDetail = null)
    {
        $this->credentials   = $credentials;
        $this->pricingDetail = $pricingDetail;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePricingDetail
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return PricingDetail
     */
    public function getPricingDetail()
    {
        return $this->pricingDetail;
    }

    /**
     * @param PricingDetail $pricingDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePricingDetail
     */
    public function setPricingDetail(PricingDetail $pricingDetail)
    {
        $this->pricingDetail = $pricingDetail;
        return $this;
    }

}
