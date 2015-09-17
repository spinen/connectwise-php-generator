<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPriceBreak
{

    /**
     * @var PriceBreak[] $PriceBreak
     */
    protected $PriceBreak = null;

    public function __construct()
    {

    }

    /**
     * @return PriceBreak[]
     */
    public function getPriceBreak()
    {
        return $this->PriceBreak;
    }

    /**
     * @param PriceBreak[] $PriceBreak
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPriceBreak
     */
    public function setPriceBreak(array $PriceBreak = null)
    {
        $this->PriceBreak = $PriceBreak;
        return $this;
    }

}
