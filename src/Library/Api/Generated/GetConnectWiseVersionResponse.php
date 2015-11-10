<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetConnectWiseVersionResponse
{

    /**
     * @var string $GetConnectWiseVersionResult
     */
    protected $GetConnectWiseVersionResult = null;

    /**
     * @param string $GetConnectWiseVersionResult
     */
    public function __construct($GetConnectWiseVersionResult = null)
    {
        $this->GetConnectWiseVersionResult = $GetConnectWiseVersionResult;
    }

    /**
     * @return string
     */
    public function getGetConnectWiseVersionResult()
    {
        return $this->GetConnectWiseVersionResult;
    }

    /**
     * @param string $GetConnectWiseVersionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetConnectWiseVersionResponse
     */
    public function setGetConnectWiseVersionResult($GetConnectWiseVersionResult)
    {
        $this->GetConnectWiseVersionResult = $GetConnectWiseVersionResult;
        return $this;
    }

}
