<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPortalSecurityResponse
{

    /**
     * @var ArrayOfPortalSecurity $GetPortalSecurityResult
     */
    protected $GetPortalSecurityResult = null;

    /**
     * @param ArrayOfPortalSecurity $GetPortalSecurityResult
     */
    public function __construct($GetPortalSecurityResult = null)
    {
        $this->GetPortalSecurityResult = $GetPortalSecurityResult;
    }

    /**
     * @return ArrayOfPortalSecurity
     */
    public function getGetPortalSecurityResult()
    {
        return $this->GetPortalSecurityResult;
    }

    /**
     * @param ArrayOfPortalSecurity $GetPortalSecurityResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalSecurityResponse
     */
    public function setGetPortalSecurityResult($GetPortalSecurityResult)
    {
        $this->GetPortalSecurityResult = $GetPortalSecurityResult;
        return $this;
    }

}
