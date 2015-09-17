<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ForecastItem
{

    /**
     * @var string $ForecastType
     */
    protected $ForecastType = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var float $Revenue
     */
    protected $Revenue = null;

    /**
     * @var boolean $Included
     */
    protected $Included = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var boolean $Linked
     */
    protected $Linked = null;

    /**
     * @var string $QuoteNumber
     */
    protected $QuoteNumber = null;

    /**
     * @var string $QuoteName
     */
    protected $QuoteName = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @param float $Cost
     * @param float $Revenue
     * @param boolean $Included
     * @param boolean $Linked
     */
    public function __construct($Cost = null, $Revenue = null, $Included = null, $Linked = null)
    {
        $this->Cost     = $Cost;
        $this->Revenue  = $Revenue;
        $this->Included = $Included;
        $this->Linked   = $Linked;
    }

    /**
     * @return string
     */
    public function getForecastType()
    {
        return $this->ForecastType;
    }

    /**
     * @param string $ForecastType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setForecastType($ForecastType)
    {
        $this->ForecastType = $ForecastType;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param float $Cost
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setCost($Cost)
    {
        $this->Cost = $Cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getRevenue()
    {
        return $this->Revenue;
    }

    /**
     * @param float $Revenue
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setRevenue($Revenue)
    {
        $this->Revenue = $Revenue;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->Included;
    }

    /**
     * @param boolean $Included
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setIncluded($Included)
    {
        $this->Included = $Included;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getLinked()
    {
        return $this->Linked;
    }

    /**
     * @param boolean $Linked
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setLinked($Linked)
    {
        $this->Linked = $Linked;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->QuoteNumber;
    }

    /**
     * @param string $QuoteNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setQuoteNumber($QuoteNumber)
    {
        $this->QuoteNumber = $QuoteNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuoteName()
    {
        return $this->QuoteName;
    }

    /**
     * @param string $QuoteName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setQuoteName($QuoteName)
    {
        $this->QuoteName = $QuoteName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Spinen\ConnectWise\Library\Api\Generated\ForecastItem
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

}
