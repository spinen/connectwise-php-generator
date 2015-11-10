<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfManagedGroup
{

    /**
     * @var ManagedGroup[] $ManagedGroup
     */
    protected $ManagedGroup = null;

    public function __construct()
    {

    }

    /**
     * @return ManagedGroup[]
     */
    public function getManagedGroup()
    {
        return $this->ManagedGroup;
    }

    /**
     * @param ManagedGroup[] $ManagedGroup
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfManagedGroup
     */
    public function setManagedGroup(array $ManagedGroup)
    {
        $this->ManagedGroup = $ManagedGroup;
        return $this;
    }

}
