<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindContactCountResponse
{

    /**
     * @var int $FindContactCountResult
     */
    protected $FindContactCountResult = null;

    /**
     * @param int $FindContactCountResult
     */
    public function __construct($FindContactCountResult = null)
    {
        $this->FindContactCountResult = $FindContactCountResult;
    }

    /**
     * @return int
     */
    public function getFindContactCountResult()
    {
        return $this->FindContactCountResult;
    }

    /**
     * @param int $FindContactCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindContactCountResponse
     */
    public function setFindContactCountResult($FindContactCountResult)
    {
        $this->FindContactCountResult = $FindContactCountResult;
        return $this;
    }

}
