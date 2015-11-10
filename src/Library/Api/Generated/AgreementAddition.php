<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementAddition
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
     * @var AdditionsProduct $AdditionsProduct
     */
    protected $AdditionsProduct = null;

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
     * @var BillCustomer $BillCustomer
     */
    protected $BillCustomer = null;

    /**
     * @var boolean $TaxableFlag
     */
    protected $TaxableFlag = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var string $InvoiceDescription
     */
    protected $InvoiceDescription = null;

    /**
     * @var boolean $PurchaseItemFlag
     */
    protected $PurchaseItemFlag = null;

    /**
     * @var boolean $SpecialOrderFlag
     */
    protected $SpecialOrderFlag = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $BilledQuantity
     */
    protected $BilledQuantity = null;

    /**
     * @var string $UOM
     */
    protected $UOM = null;

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
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

    /**
     * @param int $Id
     * @param AdditionsProduct $AdditionsProduct
     * @param string $SerialNumber
     * @param string $InvoiceDescription
     * @param string $Description
     * @param string $UOM
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, AdditionsProduct $AdditionsProduct = null, $SerialNumber = null, $InvoiceDescription = null, $Description = null, $UOM = null, $UpdatedBy = null)
    {
        $this->Id                 = $Id;
        $this->AdditionsProduct   = $AdditionsProduct;
        $this->SerialNumber       = $SerialNumber;
        $this->InvoiceDescription = $InvoiceDescription;
        $this->Description        = $Description;
        $this->UOM                = $UOM;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return AdditionsProduct
     */
    public function getAdditionsProduct()
    {
        return $this->AdditionsProduct;
    }

    /**
     * @param AdditionsProduct $AdditionsProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setAdditionsProduct(AdditionsProduct $AdditionsProduct)
    {
        $this->AdditionsProduct = $AdditionsProduct;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setCancelledDate(\DateTime $CancelledDate)
    {
        $this->CancelledDate = $CancelledDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return BillCustomer
     */
    public function getBillCustomer()
    {
        return $this->BillCustomer;
    }

    /**
     * @param BillCustomer $BillCustomer
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setBillCustomer(BillCustomer $BillCustomer)
    {
        $this->BillCustomer = $BillCustomer;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxableFlag()
    {
        return $this->TaxableFlag;
    }

    /**
     * @param boolean $TaxableFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setTaxableFlag($TaxableFlag)
    {
        $this->TaxableFlag = $TaxableFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setInvoiceDescription($InvoiceDescription)
    {
        $this->InvoiceDescription = $InvoiceDescription;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setSpecialOrderFlag($SpecialOrderFlag)
    {
        $this->SpecialOrderFlag = $SpecialOrderFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setBilledQuantity($BilledQuantity)
    {
        $this->BilledQuantity = $BilledQuantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUOM()
    {
        return $this->UOM;
    }

    /**
     * @param string $UOM
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setUOM($UOM)
    {
        $this->UOM = $UOM;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setMargin($Margin)
    {
        $this->Margin = $Margin;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAddition
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        return $this;
    }

}
