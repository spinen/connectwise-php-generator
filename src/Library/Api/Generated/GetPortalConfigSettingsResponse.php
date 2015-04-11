<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPortalConfigSettingsResponse
{

    /**
     * @var PortalConfigSettings $GetPortalConfigSettingsResult
     */
    protected $GetPortalConfigSettingsResult = null;

    /**
     * @param PortalConfigSettings $GetPortalConfigSettingsResult
     */
    public function __construct(PortalConfigSettings $GetPortalConfigSettingsResult = null)
    {
        $this->GetPortalConfigSettingsResult = $GetPortalConfigSettingsResult;
    }

    /**
     * @return PortalConfigSettings
     */
    public function getGetPortalConfigSettingsResult()
    {
        return $this->GetPortalConfigSettingsResult;
    }

    /**
     * @param PortalConfigSettings $GetPortalConfigSettingsResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPortalConfigSettingsResponse
     */
    public function setGetPortalConfigSettingsResult(PortalConfigSettings $GetPortalConfigSettingsResult)
    {
        $this->GetPortalConfigSettingsResult = $GetPortalConfigSettingsResult;
        return $this;
    }

}
