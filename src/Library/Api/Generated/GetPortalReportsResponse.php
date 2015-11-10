<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPortalReportsResponse
{

    /**
     * @var ArrayOfReport $GetPortalReportsResult
     */
    protected $GetPortalReportsResult = null;

    /**
     * @param ArrayOfReport $GetPortalReportsResult
     */
    public function __construct($GetPortalReportsResult = null)
    {
        $this->GetPortalReportsResult = $GetPortalReportsResult;
    }

    /**
     * @return ArrayOfReport
     */
    public function getGetPortalReportsResult()
    {
        return $this->GetPortalReportsResult;
    }

    /**
     * @param ArrayOfReport $GetPortalReportsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalReportsResponse
     */
    public function setGetPortalReportsResult($GetPortalReportsResult)
    {
        $this->GetPortalReportsResult = $GetPortalReportsResult;
        return $this;
    }

}
