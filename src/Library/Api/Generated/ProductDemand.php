<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductDemand
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var ItemClass $ProductClass
     */
    protected $ProductClass = null;

    /**
     * @var CompanyReference $VendorCompany
     */
    protected $VendorCompany = null;

    /**
     * @var string $VendorSKU
     */
    protected $VendorSKU = null;

    /**
     * @var string $Manufacturer
     */
    protected $Manufacturer = null;

    /**
     * @var string $ManufacturerPartNumber
     */
    protected $ManufacturerPartNumber = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var string $ShipToWarehouse
     */
    protected $ShipToWarehouse = null;

    /**
     * @var string $ShipToWarehouseBin
     */
    protected $ShipToWarehouseBin = null;

    /**
     * @var CompanyReference $ShipToCompany
     */
    protected $ShipToCompany = null;

    /**
     * @var PurchasingCompanyAddress $ShipToCompanyAddress
     */
    protected $ShipToCompanyAddress = null;

    /**
     * @var ContactReference $ShipToContact
     */
    protected $ShipToContact = null;

    /**
     * @var int $QuantityCommitted
     */
    protected $QuantityCommitted = null;

    /**
     * @var int $QuantityAlreadyOrdered
     */
    protected $QuantityAlreadyOrdered = null;

    /**
     * @var int $QuantitySatisfiedByWarehouseStock
     */
    protected $QuantitySatisfiedByWarehouseStock = null;

    /**
     * @var int $QuantityToOrder
     */
    protected $QuantityToOrder = null;

    /**
     * @var int $MinimumStockLevelForItem
     */
    protected $MinimumStockLevelForItem = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $ItemDescription
     */
    protected $ItemDescription = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @var float $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var float $ProductPrice
     */
    protected $ProductPrice = null;

    /**
     * @var float $ProductCost
     */
    protected $ProductCost = null;

    /**
     * @var boolean $IsBillable
     */
    protected $IsBillable = null;

    /**
     * @var boolean $IsInvoiced
     */
    protected $IsInvoiced = null;

    /**
     * @var boolean $IsTaxable
     */
    protected $IsTaxable = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var boolean $IsDropShipped
     */
    protected $IsDropShipped = null;

    /**
     * @var boolean $IsSpecialOrdered
     */
    protected $IsSpecialOrdered = null;

    /**
     * @var string $ShipmentMethod
     */
    protected $ShipmentMethod = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var string $InternalNotes
     */
    protected $InternalNotes = null;

    /**
     * @var \DateTime $CreatedOn
     */
    protected $CreatedOn = null;

    /**
     * @var \DateTime $UpdatedOn
     */
    protected $UpdatedOn = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var int $ServiceTicketNumber
     */
    protected $ServiceTicketNumber = null;

    /**
     * @var string $Project
     */
    protected $Project = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var string $Opportunity
     */
    protected $Opportunity = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var int $SalesOrderNumber
     */
    protected $SalesOrderNumber = null;

    /**
     * @var int $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var string $Agreement
     */
    protected $Agreement = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @param int $Id
     * @param int $QuantityCommitted
     * @param int $QuantityAlreadyOrdered
     * @param int $QuantityToOrder
     * @param boolean $IsBillable
     * @param boolean $IsInvoiced
     * @param boolean $IsTaxable
     */
    public function __construct($Id = null, $QuantityCommitted = null, $QuantityAlreadyOrdered = null, $QuantityToOrder = null, $IsBillable = null, $IsInvoiced = null, $IsTaxable = null)
    {
        $this->Id                     = $Id;
        $this->QuantityCommitted      = $QuantityCommitted;
        $this->QuantityAlreadyOrdered = $QuantityAlreadyOrdered;
        $this->QuantityToOrder        = $QuantityToOrder;
        $this->IsBillable             = $IsBillable;
        $this->IsInvoiced             = $IsInvoiced;
        $this->IsTaxable              = $IsTaxable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return ItemClass
     */
    public function getProductClass()
    {
        return $this->ProductClass;
    }

    /**
     * @param ItemClass $ProductClass
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setProductClass(ItemClass $ProductClass)
    {
        $this->ProductClass = $ProductClass;
        return $this;
    }

    /**
     * @return CompanyReference
     */
    public function getVendorCompany()
    {
        return $this->VendorCompany;
    }

    /**
     * @param CompanyReference $VendorCompany
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setVendorCompany(CompanyReference $VendorCompany)
    {
        $this->VendorCompany = $VendorCompany;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorSKU()
    {
        return $this->VendorSKU;
    }

    /**
     * @param string $VendorSKU
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setVendorSKU($VendorSKU)
    {
        $this->VendorSKU = $VendorSKU;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturer()
    {
        return $this->Manufacturer;
    }

    /**
     * @param string $Manufacturer
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setManufacturer($Manufacturer)
    {
        $this->Manufacturer = $Manufacturer;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturerPartNumber()
    {
        return $this->ManufacturerPartNumber;
    }

    /**
     * @param string $ManufacturerPartNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setManufacturerPartNumber($ManufacturerPartNumber)
    {
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToWarehouse()
    {
        return $this->ShipToWarehouse;
    }

    /**
     * @param string $ShipToWarehouse
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setShipToWarehouse($ShipToWarehouse)
    {
        $this->ShipToWarehouse = $ShipToWarehouse;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToWarehouseBin()
    {
        return $this->ShipToWarehouseBin;
    }

    /**
     * @param string $ShipToWarehouseBin
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setShipToWarehouseBin($ShipToWarehouseBin)
    {
        $this->ShipToWarehouseBin = $ShipToWarehouseBin;
        return $this;
    }

    /**
     * @return CompanyReference
     */
    public function getShipToCompany()
    {
        return $this->ShipToCompany;
    }

    /**
     * @param CompanyReference $ShipToCompany
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setShipToCompany(CompanyReference $ShipToCompany)
    {
        $this->ShipToCompany = $ShipToCompany;
        return $this;
    }

    /**
     * @return PurchasingCompanyAddress
     */
    public function getShipToCompanyAddress()
    {
        return $this->ShipToCompanyAddress;
    }

    /**
     * @param PurchasingCompanyAddress $ShipToCompanyAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setShipToCompanyAddress(PurchasingCompanyAddress $ShipToCompanyAddress)
    {
        $this->ShipToCompanyAddress = $ShipToCompanyAddress;
        return $this;
    }

    /**
     * @return ContactReference
     */
    public function getShipToContact()
    {
        return $this->ShipToContact;
    }

    /**
     * @param ContactReference $ShipToContact
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setShipToContact(ContactReference $ShipToContact)
    {
        $this->ShipToContact = $ShipToContact;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityCommitted()
    {
        return $this->QuantityCommitted;
    }

    /**
     * @param int $QuantityCommitted
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setQuantityCommitted($QuantityCommitted)
    {
        $this->QuantityCommitted = $QuantityCommitted;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityAlreadyOrdered()
    {
        return $this->QuantityAlreadyOrdered;
    }

    /**
     * @param int $QuantityAlreadyOrdered
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setQuantityAlreadyOrdered($QuantityAlreadyOrdered)
    {
        $this->QuantityAlreadyOrdered = $QuantityAlreadyOrdered;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantitySatisfiedByWarehouseStock()
    {
        return $this->QuantitySatisfiedByWarehouseStock;
    }

    /**
     * @param int $QuantitySatisfiedByWarehouseStock
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setQuantitySatisfiedByWarehouseStock($QuantitySatisfiedByWarehouseStock)
    {
        $this->QuantitySatisfiedByWarehouseStock = $QuantitySatisfiedByWarehouseStock;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityToOrder()
    {
        return $this->QuantityToOrder;
    }

    /**
     * @param int $QuantityToOrder
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setQuantityToOrder($QuantityToOrder)
    {
        $this->QuantityToOrder = $QuantityToOrder;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumStockLevelForItem()
    {
        return $this->MinimumStockLevelForItem;
    }

    /**
     * @param int $MinimumStockLevelForItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setMinimumStockLevelForItem($MinimumStockLevelForItem)
    {
        $this->MinimumStockLevelForItem = $MinimumStockLevelForItem;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription()
    {
        return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setItemDescription($ItemDescription)
    {
        $this->ItemDescription = $ItemDescription;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setUnitCost($UnitCost)
    {
        $this->UnitCost = $UnitCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductPrice()
    {
        return $this->ProductPrice;
    }

    /**
     * @param float $ProductPrice
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setProductPrice($ProductPrice)
    {
        $this->ProductPrice = $ProductPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getProductCost()
    {
        return $this->ProductCost;
    }

    /**
     * @param float $ProductCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setProductCost($ProductCost)
    {
        $this->ProductCost = $ProductCost;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBillable()
    {
        return $this->IsBillable;
    }

    /**
     * @param boolean $IsBillable
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setIsBillable($IsBillable)
    {
        $this->IsBillable = $IsBillable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInvoiced()
    {
        return $this->IsInvoiced;
    }

    /**
     * @param boolean $IsInvoiced
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setIsInvoiced($IsInvoiced)
    {
        $this->IsInvoiced = $IsInvoiced;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTaxable()
    {
        return $this->IsTaxable;
    }

    /**
     * @param boolean $IsTaxable
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setIsTaxable($IsTaxable)
    {
        $this->IsTaxable = $IsTaxable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDropShipped()
    {
        return $this->IsDropShipped;
    }

    /**
     * @param boolean $IsDropShipped
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setIsDropShipped($IsDropShipped)
    {
        $this->IsDropShipped = $IsDropShipped;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSpecialOrdered()
    {
        return $this->IsSpecialOrdered;
    }

    /**
     * @param boolean $IsSpecialOrdered
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setIsSpecialOrdered($IsSpecialOrdered)
    {
        $this->IsSpecialOrdered = $IsSpecialOrdered;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentMethod()
    {
        return $this->ShipmentMethod;
    }

    /**
     * @param string $ShipmentMethod
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setShipmentMethod($ShipmentMethod)
    {
        $this->ShipmentMethod = $ShipmentMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalNotes()
    {
        return $this->InternalNotes;
    }

    /**
     * @param string $InternalNotes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setInternalNotes($InternalNotes)
    {
        $this->InternalNotes = $InternalNotes;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        if ($this->CreatedOn == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CreatedOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CreatedOn
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setCreatedOn(\DateTime $CreatedOn = null)
    {
        if ($CreatedOn == null) {
            $this->CreatedOn = null;
        } else {
            $this->CreatedOn = $CreatedOn->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        if ($this->UpdatedOn == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->UpdatedOn);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $UpdatedOn
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setUpdatedOn(\DateTime $UpdatedOn = null)
    {
        if ($UpdatedOn == null) {
            $this->UpdatedOn = null;
        } else {
            $this->UpdatedOn = $UpdatedOn->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceTicketNumber()
    {
        return $this->ServiceTicketNumber;
    }

    /**
     * @param int $ServiceTicketNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setServiceTicketNumber($ServiceTicketNumber)
    {
        $this->ServiceTicketNumber = $ServiceTicketNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getProject()
    {
        return $this->Project;
    }

    /**
     * @param string $Project
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setProject($Project)
    {
        $this->Project = $Project;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpportunity()
    {
        return $this->Opportunity;
    }

    /**
     * @param string $Opportunity
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setOpportunity($Opportunity)
    {
        $this->Opportunity = $Opportunity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesOrderNumber()
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param int $SalesOrderNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setSalesOrderNumber($SalesOrderNumber)
    {
        $this->SalesOrderNumber = $SalesOrderNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setInvoiceId($InvoiceId)
    {
        $this->InvoiceId = $InvoiceId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
        $this->InvoiceNumber = $InvoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreement()
    {
        return $this->Agreement;
    }

    /**
     * @param string $Agreement
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setAgreement($Agreement)
    {
        $this->Agreement = $Agreement;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDemand
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

}
