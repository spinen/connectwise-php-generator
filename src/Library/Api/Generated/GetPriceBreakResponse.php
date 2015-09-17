<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPriceBreakResponse
{

    /**
     * @var PriceBreak $GetPriceBreakResult
     */
    protected $GetPriceBreakResult = null;

    /**
     * @param PriceBreak $GetPriceBreakResult
     */
    public function __construct(PriceBreak $GetPriceBreakResult = null)
    {
        $this->GetPriceBreakResult = $GetPriceBreakResult;
    }

    /**
     * @return PriceBreak
     */
    public function getGetPriceBreakResult()
    {
        return $this->GetPriceBreakResult;
    }

    /**
     * @param PriceBreak $GetPriceBreakResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPriceBreakResponse
     */
    public function setGetPriceBreakResult(PriceBreak $GetPriceBreakResult)
    {
        $this->GetPriceBreakResult = $GetPriceBreakResult;
        return $this;
    }

}
