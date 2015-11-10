<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePriceBreakResponse
{

    /**
     * @var PriceBreak $AddOrUpdatePriceBreakResult
     */
    protected $AddOrUpdatePriceBreakResult = null;

    /**
     * @param PriceBreak $AddOrUpdatePriceBreakResult
     */
    public function __construct(PriceBreak $AddOrUpdatePriceBreakResult = null)
    {
        $this->AddOrUpdatePriceBreakResult = $AddOrUpdatePriceBreakResult;
    }

    /**
     * @return PriceBreak
     */
    public function getAddOrUpdatePriceBreakResult()
    {
        return $this->AddOrUpdatePriceBreakResult;
    }

    /**
     * @param PriceBreak $AddOrUpdatePriceBreakResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePriceBreakResponse
     */
    public function setAddOrUpdatePriceBreakResult(PriceBreak $AddOrUpdatePriceBreakResult)
    {
        $this->AddOrUpdatePriceBreakResult = $AddOrUpdatePriceBreakResult;
        return $this;
    }

}
