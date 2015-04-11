<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetManagementItSetupsNameResponse
{

    /**
     * @var string $GetManagementItSetupsNameResult
     */
    protected $GetManagementItSetupsNameResult = null;

    /**
     * @param string $GetManagementItSetupsNameResult
     */
    public function __construct($GetManagementItSetupsNameResult = null)
    {
        $this->GetManagementItSetupsNameResult = $GetManagementItSetupsNameResult;
    }

    /**
     * @return string
     */
    public function getGetManagementItSetupsNameResult()
    {
        return $this->GetManagementItSetupsNameResult;
    }

    /**
     * @param string $GetManagementItSetupsNameResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetManagementItSetupsNameResponse
     */
    public function setGetManagementItSetupsNameResult($GetManagementItSetupsNameResult)
    {
        $this->GetManagementItSetupsNameResult = $GetManagementItSetupsNameResult;
        return $this;
    }

}
