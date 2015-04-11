<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdateManagedDevicesResponse
{

    /**
     * @var string $UpdateManagedDevicesResult
     */
    protected $UpdateManagedDevicesResult = null;

    /**
     * @param string $UpdateManagedDevicesResult
     */
    public function __construct($UpdateManagedDevicesResult = null)
    {
        $this->UpdateManagedDevicesResult = $UpdateManagedDevicesResult;
    }

    /**
     * @return string
     */
    public function getUpdateManagedDevicesResult()
    {
        return $this->UpdateManagedDevicesResult;
    }

    /**
     * @param string $UpdateManagedDevicesResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdateManagedDevicesResponse
     */
    public function setUpdateManagedDevicesResult($UpdateManagedDevicesResult)
    {
        $this->UpdateManagedDevicesResult = $UpdateManagedDevicesResult;
        return $this;
    }

}
