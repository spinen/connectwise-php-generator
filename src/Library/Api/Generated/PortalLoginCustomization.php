<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PortalLoginCustomization
{

    /**
     * @var string $LoginColor
     */
    protected $LoginColor = null;

    /**
     * @var string $Locale
     */
    protected $Locale = null;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getLoginColor()
    {
        return $this->LoginColor;
    }

    /**
     * @param string $LoginColor
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalLoginCustomization
     */
    public function setLoginColor($LoginColor)
    {
        $this->LoginColor = $LoginColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->Locale;
    }

    /**
     * @param string $Locale
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalLoginCustomization
     */
    public function setLocale($Locale)
    {
        $this->Locale = $Locale;
        return $this;
    }

}
