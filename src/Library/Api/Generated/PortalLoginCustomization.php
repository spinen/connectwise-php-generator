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

    /**
     * @param string $LoginColor
     * @param string $Locale
     */
    public function __construct($LoginColor = null, $Locale = null)
    {
        $this->LoginColor = $LoginColor;
        $this->Locale     = $Locale;
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
