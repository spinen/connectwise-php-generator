<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementAdditionFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $LessIncluded
     */
    protected $LessIncluded = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var float $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var \DateTime $CancelledDate
     */
    protected $CancelledDate = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $InvoiceDescription
     */
    protected $InvoiceDescription = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $BilledQuantity
     */
    protected $BilledQuantity = null;

    /**
     * @var float $ExtPrice
     */
    protected $ExtPrice = null;

    /**
     * @var float $ExtCost
     */
    protected $ExtCost = null;

    /**
     * @var float $Margin
     */
    protected $Margin = null;

    /**
     * @var boolean $PurchaseItemFlag
     */
    protected $PurchaseItemFlag = null;

    /**
     * @var boolean $SpecialOrderFlag
     */
    protected $SpecialOrderFlag = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

    /**
     * @param int $Id
     * @param string $SerialNumber
     * @param string $InvoiceDescription
     * @param string $Description
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $SerialNumber = null, $InvoiceDescription = null, $Description = null, $UpdatedBy = null)
    {
        $this->Id                 = $Id;
        $this->SerialNumber       = $SerialNumber;
        $this->InvoiceDescription = $InvoiceDescription;
        $this->Description        = $Description;
        $this->UpdatedBy          = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param int $ProductId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getLessIncluded()
    {
        return $this->LessIncluded;
    }

    /**
     * @param float $LessIncluded
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setLessIncluded($LessIncluded)
    {
        $this->LessIncluded = $LessIncluded;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getUnitCost()
    {
        return $this->UnitCost;
    }

    /**
     * @param float $UnitCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setUnitCost($UnitCost)
    {
        $this->UnitCost = $UnitCost;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        if ($this->EffectiveDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EffectiveDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setEffectiveDate(\DateTime $EffectiveDate)
    {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelledDate()
    {
        if ($this->CancelledDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CancelledDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CancelledDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setCancelledDate(\DateTime $CancelledDate)
    {
        $this->CancelledDate = $CancelledDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxable()
    {
        return $this->Taxable;
    }

    /**
     * @param boolean $Taxable
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->SerialNumber;
    }

    /**
     * @param string $SerialNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->InvoiceDescription;
    }

    /**
     * @param string $InvoiceDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setInvoiceDescription($InvoiceDescription)
    {
        $this->InvoiceDescription = $InvoiceDescription;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return float
     */
    public function getBilledQuantity()
    {
        return $this->BilledQuantity;
    }

    /**
     * @param float $BilledQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setBilledQuantity($BilledQuantity)
    {
        $this->BilledQuantity = $BilledQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getExtPrice()
    {
        return $this->ExtPrice;
    }

    /**
     * @param float $ExtPrice
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setExtPrice($ExtPrice)
    {
        $this->ExtPrice = $ExtPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getExtCost()
    {
        return $this->ExtCost;
    }

    /**
     * @param float $ExtCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setExtCost($ExtCost)
    {
        $this->ExtCost = $ExtCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getMargin()
    {
        return $this->Margin;
    }

    /**
     * @param float $Margin
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setMargin($Margin)
    {
        $this->Margin = $Margin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPurchaseItemFlag()
    {
        return $this->PurchaseItemFlag;
    }

    /**
     * @param boolean $PurchaseItemFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setPurchaseItemFlag($PurchaseItemFlag)
    {
        $this->PurchaseItemFlag = $PurchaseItemFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialOrderFlag()
    {
        return $this->SpecialOrderFlag;
    }

    /**
     * @param boolean $SpecialOrderFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setSpecialOrderFlag($SpecialOrderFlag)
    {
        $this->SpecialOrderFlag = $SpecialOrderFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        if ($this->LastUpdate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdditionFindResult
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        return $this;
    }

}
