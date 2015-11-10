<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetIntegratorLoginInfoResponse
{

    /**
     * @var IntegratorLoginInfo $GetIntegratorLoginInfoResult
     */
    protected $GetIntegratorLoginInfoResult = null;

    /**
     * @param IntegratorLoginInfo $GetIntegratorLoginInfoResult
     */
    public function __construct(IntegratorLoginInfo $GetIntegratorLoginInfoResult = null)
    {
        $this->GetIntegratorLoginInfoResult = $GetIntegratorLoginInfoResult;
    }

    /**
     * @return IntegratorLoginInfo
     */
    public function getGetIntegratorLoginInfoResult()
    {
        return $this->GetIntegratorLoginInfoResult;
    }

    /**
     * @param IntegratorLoginInfo $GetIntegratorLoginInfoResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetIntegratorLoginInfoResponse
     */
    public function setGetIntegratorLoginInfoResult(IntegratorLoginInfo $GetIntegratorLoginInfoResult)
    {
        $this->GetIntegratorLoginInfoResult = $GetIntegratorLoginInfoResult;
        return $this;
    }

}
