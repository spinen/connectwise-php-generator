<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PurchaseOrder
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var CompanyReference $VendorCompany
     */
    protected $VendorCompany = null;

    /**
     * @var ContactReference $VendorContact
     */
    protected $VendorContact = null;

    /**
     * @var PurchasingCompanyAddress $VendorCompanyAddress
     */
    protected $VendorCompanyAddress = null;

    /**
     * @var boolean $IsDropShipped
     */
    protected $IsDropShipped = null;

    /**
     * @var string $ShipToWarehouse
     */
    protected $ShipToWarehouse = null;

    /**
     * @var CompanyReference $ShipToCompany
     */
    protected $ShipToCompany = null;

    /**
     * @var PurchasingCompanyAddress $DropShipAddress
     */
    protected $DropShipAddress = null;

    /**
     * @var string $PoNumber
     */
    protected $PoNumber = null;

    /**
     * @var \DateTime $PurchaseDate
     */
    protected $PurchaseDate = null;

    /**
     * @var string $VendorOrderNumber
     */
    protected $VendorOrderNumber = null;

    /**
     * @var string $VendorInvoiceNumber
     */
    protected $VendorInvoiceNumber = null;

    /**
     * @var string $BillingTerms
     */
    protected $BillingTerms = null;

    /**
     * @var float $SubTotal
     */
    protected $SubTotal = null;

    /**
     * @var float $FreightCost
     */
    protected $FreightCost = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var string $BusinessUnit
     */
    protected $BusinessUnit = null;

    /**
     * @var string $EnteredBy
     */
    protected $EnteredBy = null;

    /**
     * @var string $ShipmentMethod
     */
    protected $ShipmentMethod = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var string $ShippingInstructions
     */
    protected $ShippingInstructions = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @var \DateTime $DateClosed
     */
    protected $DateClosed = null;

    /**
     * @var ArrayOfPurchaseOrderLineItem $LineItems
     */
    protected $LineItems = null;

    /**
     * @param int $Id
     * @param CompanyReference $VendorCompany
     * @param ContactReference $VendorContact
     * @param PurchasingCompanyAddress $VendorCompanyAddress
     * @param boolean $IsDropShipped
     * @param string $ShipToWarehouse
     * @param CompanyReference $ShipToCompany
     * @param PurchasingCompanyAddress $DropShipAddress
     * @param string $PoNumber
     * @param \DateTime $PurchaseDate
     * @param string $VendorOrderNumber
     * @param string $VendorInvoiceNumber
     * @param string $BillingTerms
     * @param float $SubTotal
     * @param float $FreightCost
     * @param float $Total
     * @param string $Location
     * @param string $BusinessUnit
     * @param string $EnteredBy
     * @param string $ShipmentMethod
     * @param string $TrackingNumber
     * @param string $ShippingInstructions
     * @param boolean $IsClosed
     * @param ArrayOfPurchaseOrderLineItem $LineItems
     */
    public function __construct($Id = null, CompanyReference $VendorCompany = null, ContactReference $VendorContact = null, PurchasingCompanyAddress $VendorCompanyAddress = null, $IsDropShipped = null, $ShipToWarehouse = null, CompanyReference $ShipToCompany = null, PurchasingCompanyAddress $DropShipAddress = null, $PoNumber = null, \DateTime $PurchaseDate = null, $VendorOrderNumber = null, $VendorInvoiceNumber = null, $BillingTerms = null, $SubTotal = null, $FreightCost = null, $Total = null, $Location = null, $BusinessUnit = null, $EnteredBy = null, $ShipmentMethod = null, $TrackingNumber = null, $ShippingInstructions = null, $IsClosed = null, $LineItems = null)
    {
        $this->Id                   = $Id;
        $this->VendorCompany        = $VendorCompany;
        $this->VendorContact        = $VendorContact;
        $this->VendorCompanyAddress = $VendorCompanyAddress;
        $this->IsDropShipped        = $IsDropShipped;
        $this->ShipToWarehouse      = $ShipToWarehouse;
        $this->ShipToCompany        = $ShipToCompany;
        $this->DropShipAddress      = $DropShipAddress;
        $this->PoNumber             = $PoNumber;
        $this->PurchaseDate         = $PurchaseDate ? $PurchaseDate->format(\DateTime::ATOM) : null;
        $this->VendorOrderNumber    = $VendorOrderNumber;
        $this->VendorInvoiceNumber  = $VendorInvoiceNumber;
        $this->BillingTerms         = $BillingTerms;
        $this->SubTotal             = $SubTotal;
        $this->FreightCost          = $FreightCost;
        $this->Total                = $Total;
        $this->Location             = $Location;
        $this->BusinessUnit         = $BusinessUnit;
        $this->EnteredBy            = $EnteredBy;
        $this->ShipmentMethod       = $ShipmentMethod;
        $this->TrackingNumber       = $TrackingNumber;
        $this->ShippingInstructions = $ShippingInstructions;
        $this->IsClosed             = $IsClosed;
        $this->LineItems            = $LineItems;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setVendorCompany(CompanyReference $VendorCompany)
    {
        $this->VendorCompany = $VendorCompany;
        return $this;
    }

    /**
     * @return ContactReference
     */
    public function getVendorContact()
    {
        return $this->VendorContact;
    }

    /**
     * @param ContactReference $VendorContact
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setVendorContact(ContactReference $VendorContact)
    {
        $this->VendorContact = $VendorContact;
        return $this;
    }

    /**
     * @return PurchasingCompanyAddress
     */
    public function getVendorCompanyAddress()
    {
        return $this->VendorCompanyAddress;
    }

    /**
     * @param PurchasingCompanyAddress $VendorCompanyAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setVendorCompanyAddress(PurchasingCompanyAddress $VendorCompanyAddress)
    {
        $this->VendorCompanyAddress = $VendorCompanyAddress;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setIsDropShipped($IsDropShipped)
    {
        $this->IsDropShipped = $IsDropShipped;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setShipToWarehouse($ShipToWarehouse)
    {
        $this->ShipToWarehouse = $ShipToWarehouse;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setShipToCompany(CompanyReference $ShipToCompany)
    {
        $this->ShipToCompany = $ShipToCompany;
        return $this;
    }

    /**
     * @return PurchasingCompanyAddress
     */
    public function getDropShipAddress()
    {
        return $this->DropShipAddress;
    }

    /**
     * @param PurchasingCompanyAddress $DropShipAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setDropShipAddress(PurchasingCompanyAddress $DropShipAddress)
    {
        $this->DropShipAddress = $DropShipAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
        return $this->PoNumber;
    }

    /**
     * @param string $PoNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setPoNumber($PoNumber)
    {
        $this->PoNumber = $PoNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        if ($this->PurchaseDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->PurchaseDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $PurchaseDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setPurchaseDate(\DateTime $PurchaseDate)
    {
        $this->PurchaseDate = $PurchaseDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorOrderNumber()
    {
        return $this->VendorOrderNumber;
    }

    /**
     * @param string $VendorOrderNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setVendorOrderNumber($VendorOrderNumber)
    {
        $this->VendorOrderNumber = $VendorOrderNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorInvoiceNumber()
    {
        return $this->VendorInvoiceNumber;
    }

    /**
     * @param string $VendorInvoiceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setVendorInvoiceNumber($VendorInvoiceNumber)
    {
        $this->VendorInvoiceNumber = $VendorInvoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingTerms()
    {
        return $this->BillingTerms;
    }

    /**
     * @param string $BillingTerms
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setBillingTerms($BillingTerms)
    {
        $this->BillingTerms = $BillingTerms;
        return $this;
    }

    /**
     * @return float
     */
    public function getSubTotal()
    {
        return $this->SubTotal;
    }

    /**
     * @param float $SubTotal
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setSubTotal($SubTotal)
    {
        $this->SubTotal = $SubTotal;
        return $this;
    }

    /**
     * @return float
     */
    public function getFreightCost()
    {
        return $this->FreightCost;
    }

    /**
     * @param float $FreightCost
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setFreightCost($FreightCost)
    {
        $this->FreightCost = $FreightCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * @param float $Total
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setBusinessUnit($BusinessUnit)
    {
        $this->BusinessUnit = $BusinessUnit;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnteredBy()
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setEnteredBy($EnteredBy)
    {
        $this->EnteredBy = $EnteredBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setShipmentMethod($ShipmentMethod)
    {
        $this->ShipmentMethod = $ShipmentMethod;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
        if ($this->ShipDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ShipDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ShipDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setShipDate(\DateTime $ShipDate)
    {
        $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingInstructions()
    {
        return $this->ShippingInstructions;
    }

    /**
     * @param string $ShippingInstructions
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setShippingInstructions($ShippingInstructions)
    {
        $this->ShippingInstructions = $ShippingInstructions;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsClosed()
    {
        return $this->IsClosed;
    }

    /**
     * @param boolean $IsClosed
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setIsClosed($IsClosed)
    {
        $this->IsClosed = $IsClosed;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateClosed()
    {
        if ($this->DateClosed == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateClosed);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateClosed
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setDateClosed(\DateTime $DateClosed)
    {
        $this->DateClosed = $DateClosed->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ArrayOfPurchaseOrderLineItem
     */
    public function getLineItems()
    {
        return $this->LineItems;
    }

    /**
     * @param ArrayOfPurchaseOrderLineItem $LineItems
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrder
     */
    public function setLineItems($LineItems)
    {
        $this->LineItems = $LineItems;
        return $this;
    }

}
