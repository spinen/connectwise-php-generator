<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetQuantityOnHandResponse
{

    /**
     * @var int $GetQuantityOnHandResult
     */
    protected $GetQuantityOnHandResult = null;

    /**
     * @param int $GetQuantityOnHandResult
     */
    public function __construct($GetQuantityOnHandResult = null)
    {
        $this->GetQuantityOnHandResult = $GetQuantityOnHandResult;
    }

    /**
     * @return int
     */
    public function getGetQuantityOnHandResult()
    {
        return $this->GetQuantityOnHandResult;
    }

    /**
     * @param int $GetQuantityOnHandResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetQuantityOnHandResponse
     */
    public function setGetQuantityOnHandResult($GetQuantityOnHandResult)
    {
        $this->GetQuantityOnHandResult = $GetQuantityOnHandResult;
        return $this;
    }

}
