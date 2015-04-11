<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetConnectWiseVersionInfoResponse
{

    /**
     * @var ConnectWiseVersionInfo $GetConnectWiseVersionInfoResult
     */
    protected $GetConnectWiseVersionInfoResult = null;

    /**
     * @param ConnectWiseVersionInfo $GetConnectWiseVersionInfoResult
     */
    public function __construct(ConnectWiseVersionInfo $GetConnectWiseVersionInfoResult = null)
    {
        $this->GetConnectWiseVersionInfoResult = $GetConnectWiseVersionInfoResult;
    }

    /**
     * @return ConnectWiseVersionInfo
     */
    public function getGetConnectWiseVersionInfoResult()
    {
        return $this->GetConnectWiseVersionInfoResult;
    }

    /**
     * @param ConnectWiseVersionInfo $GetConnectWiseVersionInfoResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetConnectWiseVersionInfoResponse
     */
    public function setGetConnectWiseVersionInfoResult(ConnectWiseVersionInfo $GetConnectWiseVersionInfoResult)
    {
        $this->GetConnectWiseVersionInfoResult = $GetConnectWiseVersionInfoResult;
        return $this;
    }

}
