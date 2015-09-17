<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ManagedGroup
{

    /**
     * @var DeviceTypes $DeviceType
     */
    protected $DeviceType = null;

    /**
     * @var string $GroupIdentifier
     */
    protected $GroupIdentifier = null;

    /**
     * @param DeviceTypes $DeviceType
     */
    public function __construct(DeviceTypes $DeviceType = null)
    {
        $this->DeviceType = $DeviceType;
    }

    /**
     * @return DeviceTypes
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * @param DeviceTypes $DeviceType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedGroup
     */
    public function setDeviceType(DeviceTypes $DeviceType)
    {
        $this->DeviceType = $DeviceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupIdentifier()
    {
        return $this->GroupIdentifier;
    }

    /**
     * @param string $GroupIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ManagedGroup
     */
    public function setGroupIdentifier($GroupIdentifier)
    {
        $this->GroupIdentifier = $GroupIdentifier;
        return $this;
    }

}
