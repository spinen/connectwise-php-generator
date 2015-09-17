<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfHardDrive
{

    /**
     * @var HardDrive[] $HardDrive
     */
    protected $HardDrive = null;

    public function __construct()
    {

    }

    /**
     * @return HardDrive[]
     */
    public function getHardDrive()
    {
        return $this->HardDrive;
    }

    /**
     * @param HardDrive[] $HardDrive
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfHardDrive
     */
    public function setHardDrive(array $HardDrive = null)
    {
        $this->HardDrive = $HardDrive;
        return $this;
    }

}
