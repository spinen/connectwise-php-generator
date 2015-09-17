<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindPricingDetailsResponse
{

    /**
     * @var ArrayOfPricingDetail $FindPricingDetailsResult
     */
    protected $FindPricingDetailsResult = null;

    /**
     * @param ArrayOfPricingDetail $FindPricingDetailsResult
     */
    public function __construct($FindPricingDetailsResult = null)
    {
        $this->FindPricingDetailsResult = $FindPricingDetailsResult;
    }

    /**
     * @return ArrayOfPricingDetail
     */
    public function getFindPricingDetailsResult()
    {
        return $this->FindPricingDetailsResult;
    }

    /**
     * @param ArrayOfPricingDetail $FindPricingDetailsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindPricingDetailsResponse
     */
    public function setFindPricingDetailsResult($FindPricingDetailsResult)
    {
        $this->FindPricingDetailsResult = $FindPricingDetailsResult;
        return $this;
    }

}
