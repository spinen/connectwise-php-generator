<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPricingSchedule
{

    /**
     * @var PricingSchedule[] $PricingSchedule
     */
    protected $PricingSchedule = null;

    public function __construct()
    {

    }

    /**
     * @return PricingSchedule[]
     */
    public function getPricingSchedule()
    {
        return $this->PricingSchedule;
    }

    /**
     * @param PricingSchedule[] $PricingSchedule
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPricingSchedule
     */
    public function setPricingSchedule(array $PricingSchedule)
    {
        $this->PricingSchedule = $PricingSchedule;
        return $this;
    }

}
