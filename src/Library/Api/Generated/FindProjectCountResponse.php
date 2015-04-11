<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindProjectCountResponse
{

    /**
     * @var int $FindProjectCountResult
     */
    protected $FindProjectCountResult = null;

    /**
     * @param int $FindProjectCountResult
     */
    public function __construct($FindProjectCountResult = null)
    {
        $this->FindProjectCountResult = $FindProjectCountResult;
    }

    /**
     * @return int
     */
    public function getFindProjectCountResult()
    {
        return $this->FindProjectCountResult;
    }

    /**
     * @param int $FindProjectCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindProjectCountResponse
     */
    public function setFindProjectCountResult($FindProjectCountResult)
    {
        $this->FindProjectCountResult = $FindProjectCountResult;
        return $this;
    }

}
