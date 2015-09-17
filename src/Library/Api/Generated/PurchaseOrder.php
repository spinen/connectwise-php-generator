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
     * @param boolean $IsDropShipped
     * @param \DateTime $PurchaseDate
     * @param float $SubTotal
     * @param float $FreightCost
     * @param float $Total
     * @param boolean $IsClosed
     */
    public function __construct($Id = null, $IsDropShipped = null, \DateTime $PurchaseDate = null, $SubTotal = null, $FreightCost = null, $Total = null, $IsClosed = null)
    {
        $this->Id            = $Id;
        $this->IsDropShipped = $IsDropShipped;
        $this->PurchaseDate  = $PurchaseDate ? $PurchaseDate->format(\DateTime::ATOM) : null;
        $this->SubTotal      = $SubTotal;
        $this->FreightCost   = $FreightCost;
        $this->Total         = $Total;
        $this->IsClosed      = $IsClosed;
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
    public function setShipDate(\DateTime $ShipDate = null)
    {
        if ($ShipDate == null) {
            $this->ShipDate = null;
        } else {
            $this->ShipDate = $ShipDate->format(\DateTime::ATOM);
        }
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
    public function setDateClosed(\DateTime $DateClosed = null)
    {
        if ($DateClosed == null) {
            $this->DateClosed = null;
        } else {
            $this->DateClosed = $DateClosed->format(\DateTime::ATOM);
        }
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
