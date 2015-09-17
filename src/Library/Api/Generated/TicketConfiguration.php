<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TicketConfiguration
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $DeviceIdentifier
     */
    protected $DeviceIdentifier = null;

    /**
     * @param int $Id
     */
    public function __construct($Id = null)
    {
        $this->Id = $Id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketConfiguration
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceIdentifier()
    {
        return $this->DeviceIdentifier;
    }

    /**
     * @param string $DeviceIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketConfiguration
     */
    public function setDeviceIdentifier($DeviceIdentifier)
    {
        $this->DeviceIdentifier = $DeviceIdentifier;
        return $this;
    }

}
