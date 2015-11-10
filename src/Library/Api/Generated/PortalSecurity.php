<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PortalSecurity
{

    /**
     * @var string $SecurityIdentifier
     */
    protected $SecurityIdentifier = null;

    /**
     * @var boolean $SecurityEnabled
     */
    protected $SecurityEnabled = null;

    /**
     * @param string $SecurityIdentifier
     * @param boolean $SecurityEnabled
     */
    public function __construct($SecurityIdentifier = null, $SecurityEnabled = null)
    {
        $this->SecurityIdentifier = $SecurityIdentifier;
        $this->SecurityEnabled    = $SecurityEnabled;
    }

    /**
     * @return string
     */
    public function getSecurityIdentifier()
    {
        return $this->SecurityIdentifier;
    }

    /**
     * @param string $SecurityIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalSecurity
     */
    public function setSecurityIdentifier($SecurityIdentifier)
    {
        $this->SecurityIdentifier = $SecurityIdentifier;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSecurityEnabled()
    {
        return $this->SecurityEnabled;
    }

    /**
     * @param boolean $SecurityEnabled
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalSecurity
     */
    public function setSecurityEnabled($SecurityEnabled)
    {
        $this->SecurityEnabled = $SecurityEnabled;
        return $this;
    }

}
