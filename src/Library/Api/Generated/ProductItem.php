<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductItem
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $Dropship
     */
    protected $Dropship = null;

    /**
     * @var boolean $SpecialOrder
     */
    protected $SpecialOrder = null;

    /**
     * @var int $ForecastDetailId
     */
    protected $ForecastDetailId = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var int $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var int $SalesOrderId
     */
    protected $SalesOrderId = null;

    /**
     * @var boolean $Invoice
     */
    protected $Invoice = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var boolean $Billable
     */
    protected $Billable = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $QuantityCancelled
     */
    protected $QuantityCancelled = null;

    /**
     * @var int $ItemId
     */
    protected $ItemId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ShortDescription
     */
    protected $ShortDescription = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var string $Warehouse
     */
    protected $Warehouse = null;

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var string $QuoteNumber
     */
    protected $QuoteNumber = null;

    /**
     * @var string $QuoteName
     */
    protected $QuoteName = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $BusinessUnitId
     */
    protected $BusinessUnitId = null;

    /**
     * @var boolean $IsPhaseProduct
     */
    protected $IsPhaseProduct = null;

    /**
     * @var float $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var ArrayOfComponent $BundleComponents
     */
    protected $BundleComponents = null;

    /**
     * @param int $Id
     * @param float $QuantityCancelled
     */
    public function __construct($Id = null, $QuantityCancelled = null)
    {
        $this->Id                = $Id;
        $this->QuantityCancelled = $QuantityCancelled;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDropship()
    {
        return $this->Dropship;
    }

    /**
     * @param boolean $Dropship
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setDropship($Dropship)
    {
        $this->Dropship = $Dropship;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecialOrder()
    {
        return $this->SpecialOrder;
    }

    /**
     * @param boolean $SpecialOrder
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setSpecialOrder($SpecialOrder)
    {
        $this->SpecialOrder = $SpecialOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getForecastDetailId()
    {
        return $this->ForecastDetailId;
    }

    /**
     * @param int $ForecastDetailId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setForecastDetailId($ForecastDetailId)
    {
        $this->ForecastDetailId = $ForecastDetailId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->TicketId;
    }

    /**
     * @param int $TicketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->InvoiceId;
    }

    /**
     * @param int $InvoiceId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setInvoiceId($InvoiceId)
    {
        $this->InvoiceId = $InvoiceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesOrderId()
    {
        return $this->SalesOrderId;
    }

    /**
     * @param int $SalesOrderId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setSalesOrderId($SalesOrderId)
    {
        $this->SalesOrderId = $SalesOrderId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInvoice()
    {
        return $this->Invoice;
    }

    /**
     * @param boolean $Invoice
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setInvoice($Invoice)
    {
        $this->Invoice = $Invoice;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setBillable($Billable)
    {
        $this->Billable = $Billable;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setCost($Cost)
    {
        $this->Cost = $Cost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantityCancelled()
    {
        return $this->QuantityCancelled;
    }

    /**
     * @param float $QuantityCancelled
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setQuantityCancelled($QuantityCancelled)
    {
        $this->QuantityCancelled = $QuantityCancelled;
        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->ItemId;
    }

    /**
     * @param int $ItemId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setItemId($ItemId)
    {
        $this->ItemId = $ItemId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setShortDescription($ShortDescription)
    {
        $this->ShortDescription = $ShortDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->OpportunityId;
    }

    /**
     * @param int $OpportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setWarehouse($Warehouse)
    {
        $this->Warehouse = $Warehouse;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setBin($Bin)
    {
        $this->Bin = $Bin;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setQuoteName($QuoteName)
    {
        $this->QuoteName = $QuoteName;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->BusinessUnitId;
    }

    /**
     * @param int $BusinessUnitId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setBusinessUnitId($BusinessUnitId)
    {
        $this->BusinessUnitId = $BusinessUnitId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPhaseProduct()
    {
        return $this->IsPhaseProduct;
    }

    /**
     * @param boolean $IsPhaseProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setIsPhaseProduct($IsPhaseProduct)
    {
        $this->IsPhaseProduct = $IsPhaseProduct;
        return $this;
    }

    /**
     * @return float
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param float $SequenceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setSequenceNumber($SequenceNumber)
    {
        $this->SequenceNumber = $SequenceNumber;
        return $this;
    }

    /**
     * @return ArrayOfComponent
     */
    public function getBundleComponents()
    {
        return $this->BundleComponents;
    }

    /**
     * @param ArrayOfComponent $BundleComponents
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductItem
     */
    public function setBundleComponents($BundleComponents)
    {
        $this->BundleComponents = $BundleComponents;
        return $this;
    }

}
