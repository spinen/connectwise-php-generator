<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfManagedServersData
{

    /**
     * @var ManagedServersData[] $ManagedServersData
     */
    protected $ManagedServersData = null;

    public function __construct()
    {

    }

    /**
     * @return ManagedServersData[]
     */
    public function getManagedServersData()
    {
        return $this->ManagedServersData;
    }

    /**
     * @param ManagedServersData[] $ManagedServersData
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfManagedServersData
     */
    public function setManagedServersData(array $ManagedServersData = null)
    {
        $this->ManagedServersData = $ManagedServersData;
        return $this;
    }

}
