<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class HardDrive
{

    /**
     * @var string $DriveLetter
     */
    protected $DriveLetter = null;

    /**
     * @var int $FreeSpaceMb
     */
    protected $FreeSpaceMb = null;

    /**
     * @var int $TotalSpaceMb
     */
    protected $TotalSpaceMb = null;

    /**
     * @param int $FreeSpaceMb
     * @param int $TotalSpaceMb
     */
    public function __construct($FreeSpaceMb = null, $TotalSpaceMb = null)
    {
        $this->FreeSpaceMb  = $FreeSpaceMb;
        $this->TotalSpaceMb = $TotalSpaceMb;
    }

    /**
     * @return string
     */
    public function getDriveLetter()
    {
        return $this->DriveLetter;
    }

    /**
     * @param string $DriveLetter
     * @return \Spinen\ConnectWise\Library\Api\Generated\HardDrive
     */
    public function setDriveLetter($DriveLetter)
    {
        $this->DriveLetter = $DriveLetter;
        return $this;
    }

    /**
     * @return int
     */
    public function getFreeSpaceMb()
    {
        return $this->FreeSpaceMb;
    }

    /**
     * @param int $FreeSpaceMb
     * @return \Spinen\ConnectWise\Library\Api\Generated\HardDrive
     */
    public function setFreeSpaceMb($FreeSpaceMb)
    {
        $this->FreeSpaceMb = $FreeSpaceMb;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalSpaceMb()
    {
        return $this->TotalSpaceMb;
    }

    /**
     * @param int $TotalSpaceMb
     * @return \Spinen\ConnectWise\Library\Api\Generated\HardDrive
     */
    public function setTotalSpaceMb($TotalSpaceMb)
    {
        $this->TotalSpaceMb = $TotalSpaceMb;
        return $this;
    }

}
