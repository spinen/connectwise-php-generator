<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetServiceStatusesResponse
{

    /**
     * @var ArrayOfString $GetServiceStatusesResult
     */
    protected $GetServiceStatusesResult = null;

    /**
     * @param ArrayOfString $GetServiceStatusesResult
     */
    public function __construct($GetServiceStatusesResult = null)
    {
        $this->GetServiceStatusesResult = $GetServiceStatusesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetServiceStatusesResult()
    {
        return $this->GetServiceStatusesResult;
    }

    /**
     * @param ArrayOfString $GetServiceStatusesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetServiceStatusesResponse
     */
    public function setGetServiceStatusesResult($GetServiceStatusesResult)
    {
        $this->GetServiceStatusesResult = $GetServiceStatusesResult;
        return $this;
    }

}
