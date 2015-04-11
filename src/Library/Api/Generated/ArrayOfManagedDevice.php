<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfManagedDevice
{

    /**
     * @var ManagedDevice[] $ManagedDevice
     */
    protected $ManagedDevice = null;

    public function __construct()
    {

    }

    /**
     * @return ManagedDevice[]
     */
    public function getManagedDevice()
    {
        return $this->ManagedDevice;
    }

    /**
     * @param ManagedDevice[] $ManagedDevice
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfManagedDevice
     */
    public function setManagedDevice(array $ManagedDevice)
    {
        $this->ManagedDevice = $ManagedDevice;
        return $this;
    }

}
