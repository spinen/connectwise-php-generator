<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementDetail
{

    /**
     * @var float $Hours
     */
    protected $Hours = null;

    /**
     * @var float $TimeAmount
     */
    protected $TimeAmount = null;

    /**
     * @var float $ExpenseAmount
     */
    protected $ExpenseAmount = null;

    /**
     * @var float $ProductAmount
     */
    protected $ProductAmount = null;

    /**
     * @var float $SalesTaxAmount
     */
    protected $SalesTaxAmount = null;

    /**
     * @var float $FixedFeeAmount
     */
    protected $FixedFeeAmount = null;

    /**
     * @var string $AgreementName
     */
    protected $AgreementName = null;

    /**
     * @var string $AgreementType
     */
    protected $AgreementType = null;

    /**
     * @var string $DetailType
     */
    protected $DetailType = null;

    /**
     * @var float $BillingAmount
     */
    protected $BillingAmount = null;

    public function __construct()
    {

    }

    /**
     * @return float
     */
    public function getHours()
    {
        return $this->Hours;
    }

    /**
     * @param float $Hours
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setHours($Hours)
    {
        $this->Hours = $Hours;
        return $this;
    }

    /**
     * @return float
     */
    public function getTimeAmount()
    {
        return $this->TimeAmount;
    }

    /**
     * @param float $TimeAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setTimeAmount($TimeAmount)
    {
        $this->TimeAmount = $TimeAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getExpenseAmount()
    {
        return $this->ExpenseAmount;
    }

    /**
     * @param float $ExpenseAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setExpenseAmount($ExpenseAmount)
    {
        $this->ExpenseAmount = $ExpenseAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductAmount()
    {
        return $this->ProductAmount;
    }

    /**
     * @param float $ProductAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setProductAmount($ProductAmount)
    {
        $this->ProductAmount = $ProductAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getSalesTaxAmount()
    {
        return $this->SalesTaxAmount;
    }

    /**
     * @param float $SalesTaxAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setSalesTaxAmount($SalesTaxAmount)
    {
        $this->SalesTaxAmount = $SalesTaxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixedFeeAmount()
    {
        return $this->FixedFeeAmount;
    }

    /**
     * @param float $FixedFeeAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setFixedFeeAmount($FixedFeeAmount)
    {
        $this->FixedFeeAmount = $FixedFeeAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreementName()
    {
        return $this->AgreementName;
    }

    /**
     * @param string $AgreementName
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setAgreementName($AgreementName)
    {
        $this->AgreementName = $AgreementName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreementType()
    {
        return $this->AgreementType;
    }

    /**
     * @param string $AgreementType
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setAgreementType($AgreementType)
    {
        $this->AgreementType = $AgreementType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDetailType()
    {
        return $this->DetailType;
    }

    /**
     * @param string $DetailType
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setDetailType($DetailType)
    {
        $this->DetailType = $DetailType;
        return $this;
    }

    /**
     * @return float
     */
    public function getBillingAmount()
    {
        return $this->BillingAmount;
    }

    /**
     * @param float $BillingAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementDetail
     */
    public function setBillingAmount($BillingAmount)
    {
        $this->BillingAmount = $BillingAmount;
        return $this;
    }

}
