<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPortalLoginCustomizationsResponse
{

    /**
     * @var PortalLoginCustomization $GetPortalLoginCustomizationsResult
     */
    protected $GetPortalLoginCustomizationsResult = null;

    /**
     * @param PortalLoginCustomization $GetPortalLoginCustomizationsResult
     */
    public function __construct(PortalLoginCustomization $GetPortalLoginCustomizationsResult = null)
    {
        $this->GetPortalLoginCustomizationsResult = $GetPortalLoginCustomizationsResult;
    }

    /**
     * @return PortalLoginCustomization
     */
    public function getGetPortalLoginCustomizationsResult()
    {
        return $this->GetPortalLoginCustomizationsResult;
    }

    /**
     * @param PortalLoginCustomization $GetPortalLoginCustomizationsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalLoginCustomizationsResponse
     */
    public function setGetPortalLoginCustomizationsResult(PortalLoginCustomization $GetPortalLoginCustomizationsResult)
    {
        $this->GetPortalLoginCustomizationsResult = $GetPortalLoginCustomizationsResult;
        return $this;
    }

}
