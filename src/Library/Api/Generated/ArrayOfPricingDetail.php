<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPricingDetail
{

    /**
     * @var PricingDetail[] $PricingDetail
     */
    protected $PricingDetail = null;

    public function __construct()
    {

    }

    /**
     * @return PricingDetail[]
     */
    public function getPricingDetail()
    {
        return $this->PricingDetail;
    }

    /**
     * @param PricingDetail[] $PricingDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPricingDetail
     */
    public function setPricingDetail(array $PricingDetail = null)
    {
        $this->PricingDetail = $PricingDetail;
        return $this;
    }

}
