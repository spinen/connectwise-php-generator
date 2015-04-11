<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetReportsResponse
{

    /**
     * @var ArrayOfReport $GetReportsResult
     */
    protected $GetReportsResult = null;

    /**
     * @param ArrayOfReport $GetReportsResult
     */
    public function __construct($GetReportsResult = null)
    {
        $this->GetReportsResult = $GetReportsResult;
    }

    /**
     * @return ArrayOfReport
     */
    public function getGetReportsResult()
    {
        return $this->GetReportsResult;
    }

    /**
     * @param ArrayOfReport $GetReportsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetReportsResponse
     */
    public function setGetReportsResult($GetReportsResult)
    {
        $this->GetReportsResult = $GetReportsResult;
        return $this;
    }

}
