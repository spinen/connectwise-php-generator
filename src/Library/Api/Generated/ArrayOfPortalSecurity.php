<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPortalSecurity
{

    /**
     * @var PortalSecurity[] $PortalSecurity
     */
    protected $PortalSecurity = null;

    public function __construct()
    {

    }

    /**
     * @return PortalSecurity[]
     */
    public function getPortalSecurity()
    {
        return $this->PortalSecurity;
    }

    /**
     * @param PortalSecurity[] $PortalSecurity
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPortalSecurity
     */
    public function setPortalSecurity(array $PortalSecurity)
    {
        $this->PortalSecurity = $PortalSecurity;
        return $this;
    }

}
