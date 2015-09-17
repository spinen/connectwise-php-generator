<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PurchaseOrderFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $VendorCompanyId
     */
    protected $VendorCompanyId = null;

    /**
     * @var string $VendorCompanyName
     */
    protected $VendorCompanyName = null;

    /**
     * @var int $VendorContactId
     */
    protected $VendorContactId = null;

    /**
     * @var string $VendorContactName
     */
    protected $VendorContactName = null;

    /**
     * @var int $VendorCompanyAddressId
     */
    protected $VendorCompanyAddressId = null;

    /**
     * @var string $VendorOrderNumber
     */
    protected $VendorOrderNumber = null;

    /**
     * @var string $VendorInvoiceNumber
     */
    protected $VendorInvoiceNumber = null;

    /**
     * @var boolean $IsDropShipped
     */
    protected $IsDropShipped = null;

    /**
     * @var string $ShipToWarehouse
     */
    protected $ShipToWarehouse = null;

    /**
     * @var int $ShipToCompanyId
     */
    protected $ShipToCompanyId = null;

    /**
     * @var string $ShipToCompanyName
     */
    protected $ShipToCompanyName = null;

    /**
     * @var int $ShipToCompanyAddressId
     */
    protected $ShipToCompanyAddressId = null;

    /**
     * @var \DateTime $PurchaseDate
     */
    protected $PurchaseDate = null;

    /**
     * @var float $Total
     */
    protected $Total = null;

    /**
     * @var float $FreightCost
     */
    protected $FreightCost = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var string $ShipmentMethod
     */
    protected $ShipmentMethod = null;

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
     * @var string $UpdateBy
     */
    protected $UpdateBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @param int $Id
     */
    public function __construct($Id = null)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorCompanyId()
    {
        return $this->VendorCompanyId;
    }

    /**
     * @param int $VendorCompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setVendorCompanyId($VendorCompanyId)
    {
        $this->VendorCompanyId = $VendorCompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorCompanyName()
    {
        return $this->VendorCompanyName;
    }

    /**
     * @param string $VendorCompanyName
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setVendorCompanyName($VendorCompanyName)
    {
        $this->VendorCompanyName = $VendorCompanyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorContactId()
    {
        return $this->VendorContactId;
    }

    /**
     * @param int $VendorContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setVendorContactId($VendorContactId)
    {
        $this->VendorContactId = $VendorContactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorContactName()
    {
        return $this->VendorContactName;
    }

    /**
     * @param string $VendorContactName
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setVendorContactName($VendorContactName)
    {
        $this->VendorContactName = $VendorContactName;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorCompanyAddressId()
    {
        return $this->VendorCompanyAddressId;
    }

    /**
     * @param int $VendorCompanyAddressId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setVendorCompanyAddressId($VendorCompanyAddressId)
    {
        $this->VendorCompanyAddressId = $VendorCompanyAddressId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setVendorInvoiceNumber($VendorInvoiceNumber)
    {
        $this->VendorInvoiceNumber = $VendorInvoiceNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setShipToWarehouse($ShipToWarehouse)
    {
        $this->ShipToWarehouse = $ShipToWarehouse;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipToCompanyId()
    {
        return $this->ShipToCompanyId;
    }

    /**
     * @param int $ShipToCompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setShipToCompanyId($ShipToCompanyId)
    {
        $this->ShipToCompanyId = $ShipToCompanyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipToCompanyName()
    {
        return $this->ShipToCompanyName;
    }

    /**
     * @param string $ShipToCompanyName
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setShipToCompanyName($ShipToCompanyName)
    {
        $this->ShipToCompanyName = $ShipToCompanyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipToCompanyAddressId()
    {
        return $this->ShipToCompanyAddressId;
    }

    /**
     * @param int $ShipToCompanyAddressId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setShipToCompanyAddressId($ShipToCompanyAddressId)
    {
        $this->ShipToCompanyAddressId = $ShipToCompanyAddressId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setPurchaseDate(\DateTime $PurchaseDate = null)
    {
        if ($PurchaseDate == null) {
            $this->PurchaseDate = null;
        } else {
            $this->PurchaseDate = $PurchaseDate->format(\DateTime::ATOM);
        }
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setTotal($Total)
    {
        $this->Total = $Total;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setFreightCost($FreightCost)
    {
        $this->FreightCost = $FreightCost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setShipmentMethod($ShipmentMethod)
    {
        $this->ShipmentMethod = $ShipmentMethod;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
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
     * @return string
     */
    public function getUpdateBy()
    {
        return $this->UpdateBy;
    }

    /**
     * @param string $UpdateBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setUpdateBy($UpdateBy)
    {
        $this->UpdateBy = $UpdateBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        if ($this->LastUpdated == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated = null)
    {
        if ($LastUpdated == null) {
            $this->LastUpdated = null;
        } else {
            $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        }
        return $this;
    }

}
