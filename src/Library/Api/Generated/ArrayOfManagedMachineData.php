<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfManagedMachineData
{

    /**
     * @var ManagedMachineData[] $ManagedMachineData
     */
    protected $ManagedMachineData = null;

    public function __construct()
    {

    }

    /**
     * @return ManagedMachineData[]
     */
    public function getManagedMachineData()
    {
        return $this->ManagedMachineData;
    }

    /**
     * @param ManagedMachineData[] $ManagedMachineData
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfManagedMachineData
     */
    public function setManagedMachineData(array $ManagedMachineData = null)
    {
        $this->ManagedMachineData = $ManagedMachineData;
        return $this;
    }

}
