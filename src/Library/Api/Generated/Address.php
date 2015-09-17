<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Address
{

    /**
     * @var ArrayOfString $StreetLines
     */
    protected $StreetLines = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $Zip
     */
    protected $Zip = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    public function __construct()
    {

    }

    /**
     * @return ArrayOfString
     */
    public function getStreetLines()
    {
        return $this->StreetLines;
    }

    /**
     * @param ArrayOfString $StreetLines
     * @return \Spinen\ConnectWise\Library\Api\Generated\Address
     */
    public function setStreetLines($StreetLines)
    {
        $this->StreetLines = $StreetLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return \Spinen\ConnectWise\Library\Api\Generated\Address
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return \Spinen\ConnectWise\Library\Api\Generated\Address
     */
    public function setState($State)
    {
        $this->State = $State;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return \Spinen\ConnectWise\Library\Api\Generated\Address
     */
    public function setZip($Zip)
    {
        $this->Zip = $Zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Spinen\ConnectWise\Library\Api\Generated\Address
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
        return $this;
    }

}
