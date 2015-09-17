<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindPriceBreaksResponse
{

    /**
     * @var ArrayOfPriceBreak $FindPriceBreaksResult
     */
    protected $FindPriceBreaksResult = null;

    /**
     * @param ArrayOfPriceBreak $FindPriceBreaksResult
     */
    public function __construct($FindPriceBreaksResult = null)
    {
        $this->FindPriceBreaksResult = $FindPriceBreaksResult;
    }

    /**
     * @return ArrayOfPriceBreak
     */
    public function getFindPriceBreaksResult()
    {
        return $this->FindPriceBreaksResult;
    }

    /**
     * @param ArrayOfPriceBreak $FindPriceBreaksResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindPriceBreaksResponse
     */
    public function setFindPriceBreaksResult($FindPriceBreaksResult)
    {
        $this->FindPriceBreaksResult = $FindPriceBreaksResult;
        return $this;
    }

}
