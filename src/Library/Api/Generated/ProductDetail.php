<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductDetail
{

    /**
     * @var ArrayOfString $SerialNumbers
     */
    protected $SerialNumbers = null;

    /**
     * @var boolean $Billable
     */
    protected $Billable = null;

    /**
     * @var boolean $IsSerialized
     */
    protected $IsSerialized = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var float $AgreementAmount
     */
    protected $AgreementAmount = null;

    /**
     * @var float $InvoicedAmount
     */
    protected $InvoicedAmount = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var float $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $ChargeTo
     */
    protected $ChargeTo = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ItemClass
     */
    protected $ItemClass = null;

    /**
     * @var string $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var string $ItemType
     */
    protected $ItemType = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $ManufacturerName
     */
    protected $ManufacturerName = null;

    /**
     * @var string $ManufacturerIdentifier
     */
    protected $ManufacturerIdentifier = null;

    /**
     * @var string $SubCategory
     */
    protected $SubCategory = null;

    /**
     * @var string $ProjectName
     */
    protected $ProjectName = null;

    /**
     * @var int $ProjectNumber
     */
    protected $ProjectNumber = null;

    /**
     * @var string $PhaseName
     */
    protected $PhaseName = null;

    /**
     * @var int $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var string $TicketSummary
     */
    protected $TicketSummary = null;

    /**
     * @var string $VendorName
     */
    protected $VendorName = null;

    /**
     * @var string $VendorIdentifier
     */
    protected $VendorIdentifier = null;

    /**
     * @var string $VendorNumber
     */
    protected $VendorNumber = null;

    /**
     * @var string $Warehouse
     */
    protected $Warehouse = null;

    /**
     * @param ArrayOfString $SerialNumbers
     * @param boolean $Billable
     * @param boolean $IsSerialized
     * @param boolean $Taxable
     * @param \DateTime $Date
     * @param string $Bin
     * @param string $BusinessUnit
     * @param string $Category
     * @param string $ChargeTo
     * @param string $Description
     * @param string $ItemClass
     * @param string $ItemIdentifier
     * @param string $ItemType
     * @param string $Location
     * @param string $ManufacturerName
     * @param string $ManufacturerIdentifier
     * @param string $SubCategory
     * @param string $ProjectName
     * @param string $PhaseName
     * @param string $TicketSummary
     * @param string $VendorName
     * @param string $VendorIdentifier
     * @param string $VendorNumber
     * @param string $Warehouse
     */
    public function __construct($SerialNumbers = null, $Billable = null, $IsSerialized = null, $Taxable = null, \DateTime $Date = null, $Bin = null, $BusinessUnit = null, $Category = null, $ChargeTo = null, $Description = null, $ItemClass = null, $ItemIdentifier = null, $ItemType = null, $Location = null, $ManufacturerName = null, $ManufacturerIdentifier = null, $SubCategory = null, $ProjectName = null, $PhaseName = null, $TicketSummary = null, $VendorName = null, $VendorIdentifier = null, $VendorNumber = null, $Warehouse = null)
    {
        $this->SerialNumbers          = $SerialNumbers;
        $this->Billable               = $Billable;
        $this->IsSerialized           = $IsSerialized;
        $this->Taxable                = $Taxable;
        $this->Date                   = $Date ? $Date->format(\DateTime::ATOM) : null;
        $this->Bin                    = $Bin;
        $this->BusinessUnit           = $BusinessUnit;
        $this->Category               = $Category;
        $this->ChargeTo               = $ChargeTo;
        $this->Description            = $Description;
        $this->ItemClass              = $ItemClass;
        $this->ItemIdentifier         = $ItemIdentifier;
        $this->ItemType               = $ItemType;
        $this->Location               = $Location;
        $this->ManufacturerName       = $ManufacturerName;
        $this->ManufacturerIdentifier = $ManufacturerIdentifier;
        $this->SubCategory            = $SubCategory;
        $this->ProjectName            = $ProjectName;
        $this->PhaseName              = $PhaseName;
        $this->TicketSummary          = $TicketSummary;
        $this->VendorName             = $VendorName;
        $this->VendorIdentifier       = $VendorIdentifier;
        $this->VendorNumber           = $VendorNumber;
        $this->Warehouse              = $Warehouse;
    }

    /**
     * @return ArrayOfString
     */
    public function getSerialNumbers()
    {
        return $this->SerialNumbers;
    }

    /**
     * @param ArrayOfString $SerialNumbers
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setSerialNumbers($SerialNumbers)
    {
        $this->SerialNumbers = $SerialNumbers;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBillable()
    {
        return $this->Billable;
    }

    /**
     * @param boolean $Billable
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setBillable($Billable)
    {
        $this->Billable = $Billable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSerialized()
    {
        return $this->IsSerialized;
    }

    /**
     * @param boolean $IsSerialized
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setIsSerialized($IsSerialized)
    {
        $this->IsSerialized = $IsSerialized;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        if ($this->Date == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->Date);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $Date
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setDate(\DateTime $Date)
    {
        $this->Date = $Date->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return float
     */
    public function getAgreementAmount()
    {
        return $this->AgreementAmount;
    }

    /**
     * @param float $AgreementAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setAgreementAmount($AgreementAmount)
    {
        $this->AgreementAmount = $AgreementAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getInvoicedAmount()
    {
        return $this->InvoicedAmount;
    }

    /**
     * @param float $InvoicedAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setInvoicedAmount($InvoicedAmount)
    {
        $this->InvoicedAmount = $InvoicedAmount;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setUnitCost($UnitCost)
    {
        $this->UnitCost = $UnitCost;
        return $this;
    }

    /**
     * @return string
     */
    public function getBin()
    {
        return $this->Bin;
    }

    /**
     * @param string $Bin
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setBin($Bin)
    {
        $this->Bin = $Bin;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessUnit()
    {
        return $this->BusinessUnit;
    }

    /**
     * @param string $BusinessUnit
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeTo()
    {
        return $this->ChargeTo;
    }

    /**
     * @param string $ChargeTo
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setChargeTo($ChargeTo)
    {
        $this->ChargeTo = $ChargeTo;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemClass()
    {
        return $this->ItemClass;
    }

    /**
     * @param string $ItemClass
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setItemClass($ItemClass)
    {
        $this->ItemClass = $ItemClass;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemIdentifier()
    {
        return $this->ItemIdentifier;
    }

    /**
     * @param string $ItemIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemType()
    {
        return $this->ItemType;
    }

    /**
     * @param string $ItemType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setItemType($ItemType)
    {
        $this->ItemType = $ItemType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->ManufacturerName;
    }

    /**
     * @param string $ManufacturerName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setManufacturerName($ManufacturerName)
    {
        $this->ManufacturerName = $ManufacturerName;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerIdentifier()
    {
        return $this->ManufacturerIdentifier;
    }

    /**
     * @param string $ManufacturerIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setManufacturerIdentifier($ManufacturerIdentifier)
    {
        $this->ManufacturerIdentifier = $ManufacturerIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubCategory()
    {
        return $this->SubCategory;
    }

    /**
     * @param string $SubCategory
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setSubCategory($SubCategory)
    {
        $this->SubCategory = $SubCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectName()
    {
        return $this->ProjectName;
    }

    /**
     * @param string $ProjectName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setProjectName($ProjectName)
    {
        $this->ProjectName = $ProjectName;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectNumber()
    {
        return $this->ProjectNumber;
    }

    /**
     * @param int $ProjectNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setProjectNumber($ProjectNumber)
    {
        $this->ProjectNumber = $ProjectNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhaseName()
    {
        return $this->PhaseName;
    }

    /**
     * @param string $PhaseName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setPhaseName($PhaseName)
    {
        $this->PhaseName = $PhaseName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }

    /**
     * @param int $TicketNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setTicketNumber($TicketNumber)
    {
        $this->TicketNumber = $TicketNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTicketSummary()
    {
        return $this->TicketSummary;
    }

    /**
     * @param string $TicketSummary
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setTicketSummary($TicketSummary)
    {
        $this->TicketSummary = $TicketSummary;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName()
    {
        return $this->VendorName;
    }

    /**
     * @param string $VendorName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setVendorName($VendorName)
    {
        $this->VendorName = $VendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorIdentifier()
    {
        return $this->VendorIdentifier;
    }

    /**
     * @param string $VendorIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setVendorIdentifier($VendorIdentifier)
    {
        $this->VendorIdentifier = $VendorIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorNumber()
    {
        return $this->VendorNumber;
    }

    /**
     * @param string $VendorNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setVendorNumber($VendorNumber)
    {
        $this->VendorNumber = $VendorNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouse()
    {
        return $this->Warehouse;
    }

    /**
     * @param string $Warehouse
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setWarehouse($Warehouse)
    {
        $this->Warehouse = $Warehouse;
        return $this;
    }

}
