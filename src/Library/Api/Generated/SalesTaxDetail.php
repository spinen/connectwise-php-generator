<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SalesTaxDetail
{

    /**
     * @var boolean $TaxExpenses
     */
    protected $TaxExpenses = null;

    /**
     * @var boolean $TaxProducts
     */
    protected $TaxProducts = null;

    /**
     * @var boolean $TaxServices
     */
    protected $TaxServices = null;

    /**
     * @var boolean $ApplySingleUnitLimit
     */
    protected $ApplySingleUnitLimit = null;

    /**
     * @var int $TaxLevel
     */
    protected $TaxLevel = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var float $SingleUnitMax
     */
    protected $SingleUnitMax = null;

    /**
     * @var float $SingleUnitMin
     */
    protected $SingleUnitMin = null;

    /**
     * @var float $TaxableMax
     */
    protected $TaxableMax = null;

    /**
     * @var string $Caption
     */
    protected $Caption = null;

    /**
     * @var string $RateType
     */
    protected $RateType = null;

    /**
     * @var string $TaxAgencyXref
     */
    protected $TaxAgencyXref = null;

    /**
     * @var string $TaxCodeXref
     */
    protected $TaxCodeXref = null;

    /**
     * @param boolean $TaxExpenses
     * @param boolean $TaxProducts
     * @param boolean $TaxServices
     * @param boolean $ApplySingleUnitLimit
     * @param int $TaxLevel
     * @param string $Caption
     * @param string $RateType
     * @param string $TaxAgencyXref
     * @param string $TaxCodeXref
     */
    public function __construct($TaxExpenses = null, $TaxProducts = null, $TaxServices = null, $ApplySingleUnitLimit = null, $TaxLevel = null, $Caption = null, $RateType = null, $TaxAgencyXref = null, $TaxCodeXref = null)
    {
        $this->TaxExpenses          = $TaxExpenses;
        $this->TaxProducts          = $TaxProducts;
        $this->TaxServices          = $TaxServices;
        $this->ApplySingleUnitLimit = $ApplySingleUnitLimit;
        $this->TaxLevel             = $TaxLevel;
        $this->Caption              = $Caption;
        $this->RateType             = $RateType;
        $this->TaxAgencyXref        = $TaxAgencyXref;
        $this->TaxCodeXref          = $TaxCodeXref;
    }

    /**
     * @return boolean
     */
    public function getTaxExpenses()
    {
        return $this->TaxExpenses;
    }

    /**
     * @param boolean $TaxExpenses
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxExpenses($TaxExpenses)
    {
        $this->TaxExpenses = $TaxExpenses;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxProducts()
    {
        return $this->TaxProducts;
    }

    /**
     * @param boolean $TaxProducts
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxProducts($TaxProducts)
    {
        $this->TaxProducts = $TaxProducts;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxServices()
    {
        return $this->TaxServices;
    }

    /**
     * @param boolean $TaxServices
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxServices($TaxServices)
    {
        $this->TaxServices = $TaxServices;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getApplySingleUnitLimit()
    {
        return $this->ApplySingleUnitLimit;
    }

    /**
     * @param boolean $ApplySingleUnitLimit
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setApplySingleUnitLimit($ApplySingleUnitLimit)
    {
        $this->ApplySingleUnitLimit = $ApplySingleUnitLimit;
        return $this;
    }

    /**
     * @return int
     */
    public function getTaxLevel()
    {
        return $this->TaxLevel;
    }

    /**
     * @param int $TaxLevel
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxLevel($TaxLevel)
    {
        $this->TaxLevel = $TaxLevel;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getSingleUnitMax()
    {
        return $this->SingleUnitMax;
    }

    /**
     * @param float $SingleUnitMax
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setSingleUnitMax($SingleUnitMax)
    {
        $this->SingleUnitMax = $SingleUnitMax;
        return $this;
    }

    /**
     * @return float
     */
    public function getSingleUnitMin()
    {
        return $this->SingleUnitMin;
    }

    /**
     * @param float $SingleUnitMin
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setSingleUnitMin($SingleUnitMin)
    {
        $this->SingleUnitMin = $SingleUnitMin;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxableMax()
    {
        return $this->TaxableMax;
    }

    /**
     * @param float $TaxableMax
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxableMax($TaxableMax)
    {
        $this->TaxableMax = $TaxableMax;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->Caption;
    }

    /**
     * @param string $Caption
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setCaption($Caption)
    {
        $this->Caption = $Caption;
        return $this;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
        return $this->RateType;
    }

    /**
     * @param string $RateType
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setRateType($RateType)
    {
        $this->RateType = $RateType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxAgencyXref()
    {
        return $this->TaxAgencyXref;
    }

    /**
     * @param string $TaxAgencyXref
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxAgencyXref($TaxAgencyXref)
    {
        $this->TaxAgencyXref = $TaxAgencyXref;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxCodeXref()
    {
        return $this->TaxCodeXref;
    }

    /**
     * @param string $TaxCodeXref
     * @return \Spinen\ConnectWise\Library\Api\Generated\SalesTaxDetail
     */
    public function setTaxCodeXref($TaxCodeXref)
    {
        $this->TaxCodeXref = $TaxCodeXref;
        return $this;
    }

}
