<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConnectWiseVersionInfo
{

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @var boolean $IsCloud
     */
    protected $IsCloud = null;

    /**
     * @param boolean $IsCloud
     */
    public function __construct($IsCloud = null)
    {
        $this->IsCloud = $IsCloud;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param string $Version
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConnectWiseVersionInfo
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCloud()
    {
        return $this->IsCloud;
    }

    /**
     * @param boolean $IsCloud
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConnectWiseVersionInfo
     */
    public function setIsCloud($IsCloud)
    {
        $this->IsCloud = $IsCloud;
        return $this;
    }

}
