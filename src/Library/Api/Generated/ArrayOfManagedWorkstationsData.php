<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfManagedWorkstationsData
{

    /**
     * @var ManagedWorkstationsData[] $ManagedWorkstationsData
     */
    protected $ManagedWorkstationsData = null;

    public function __construct()
    {

    }

    /**
     * @return ManagedWorkstationsData[]
     */
    public function getManagedWorkstationsData()
    {
        return $this->ManagedWorkstationsData;
    }

    /**
     * @param ManagedWorkstationsData[] $ManagedWorkstationsData
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfManagedWorkstationsData
     */
    public function setManagedWorkstationsData(array $ManagedWorkstationsData = null)
    {
        $this->ManagedWorkstationsData = $ManagedWorkstationsData;
        return $this;
    }

}
