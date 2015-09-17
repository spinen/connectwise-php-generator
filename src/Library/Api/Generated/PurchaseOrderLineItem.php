<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PurchaseOrderLineItem
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
     * @var int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var string $UnitOfMeasure
     */
    protected $UnitOfMeasure = null;

    /**
     * @var float $UnitCost
     */
    protected $UnitCost = null;

    /**
     * @var string $ShipmentMethod
     */
    protected $ShipmentMethod = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var \DateTime $ShipDate
     */
    protected $ShipDate = null;

    /**
     * @var string $VendorOrderNumber
     */
    protected $VendorOrderNumber = null;

    /**
     * @var boolean $IsBackordered
     */
    protected $IsBackordered = null;

    /**
     * @var \DateTime $ExpectedShipDate
     */
    protected $ExpectedShipDate = null;

    /**
     * @var int $ReceivedQuantity
     */
    protected $ReceivedQuantity = null;

    /**
     * @var string $GenericSerialNumber
     */
    protected $GenericSerialNumber = null;

    /**
     * @var ArrayOfString $SerialNumbers
     */
    protected $SerialNumbers = null;

    /**
     * @var string $ShipToWarehouse
     */
    protected $ShipToWarehouse = null;

    /**
     * @var string $ShipToWarehouseBin
     */
    protected $ShipToWarehouseBin = null;

    /**
     * @var string $PackingSlip
     */
    protected $PackingSlip = null;

    /**
     * @var boolean $IsCancelled
     */
    protected $IsCancelled = null;

    /**
     * @var string $CancelReason
     */
    protected $CancelReason = null;

    /**
     * @var boolean $IsClosed
     */
    protected $IsClosed = null;

    /**
     * @var \DateTime $ReceivedDate
     */
    protected $ReceivedDate = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
        return $this;
    }

    /**
     * @return int
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }

    /**
     * @param int $LineNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }

    /**
     * @param string $UnitOfMeasure
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setUnitOfMeasure($UnitOfMeasure)
    {
        $this->UnitOfMeasure = $UnitOfMeasure;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setUnitCost($UnitCost)
    {
        $this->UnitCost = $UnitCost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
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
    public function getVendorOrderNumber()
    {
        return $this->VendorOrderNumber;
    }

    /**
     * @param string $VendorOrderNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setVendorOrderNumber($VendorOrderNumber)
    {
        $this->VendorOrderNumber = $VendorOrderNumber;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBackordered()
    {
        return $this->IsBackordered;
    }

    /**
     * @param boolean $IsBackordered
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setIsBackordered($IsBackordered)
    {
        $this->IsBackordered = $IsBackordered;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpectedShipDate()
    {
        if ($this->ExpectedShipDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ExpectedShipDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ExpectedShipDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setExpectedShipDate(\DateTime $ExpectedShipDate = null)
    {
        if ($ExpectedShipDate == null) {
            $this->ExpectedShipDate = null;
        } else {
            $this->ExpectedShipDate = $ExpectedShipDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getReceivedQuantity()
    {
        return $this->ReceivedQuantity;
    }

    /**
     * @param int $ReceivedQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setReceivedQuantity($ReceivedQuantity)
    {
        $this->ReceivedQuantity = $ReceivedQuantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenericSerialNumber()
    {
        return $this->GenericSerialNumber;
    }

    /**
     * @param string $GenericSerialNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setGenericSerialNumber($GenericSerialNumber)
    {
        $this->GenericSerialNumber = $GenericSerialNumber;
        return $this;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setSerialNumbers($SerialNumbers)
    {
        $this->SerialNumbers = $SerialNumbers;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setShipToWarehouseBin($ShipToWarehouseBin)
    {
        $this->ShipToWarehouseBin = $ShipToWarehouseBin;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackingSlip()
    {
        return $this->PackingSlip;
    }

    /**
     * @param string $PackingSlip
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setPackingSlip($PackingSlip)
    {
        $this->PackingSlip = $PackingSlip;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCancelled()
    {
        return $this->IsCancelled;
    }

    /**
     * @param boolean $IsCancelled
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setIsCancelled($IsCancelled)
    {
        $this->IsCancelled = $IsCancelled;
        return $this;
    }

    /**
     * @return string
     */
    public function getCancelReason()
    {
        return $this->CancelReason;
    }

    /**
     * @param string $CancelReason
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setCancelReason($CancelReason)
    {
        $this->CancelReason = $CancelReason;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setIsClosed($IsClosed)
    {
        $this->IsClosed = $IsClosed;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        if ($this->ReceivedDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->ReceivedDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $ReceivedDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\PurchaseOrderLineItem
     */
    public function setReceivedDate(\DateTime $ReceivedDate = null)
    {
        if ($ReceivedDate == null) {
            $this->ReceivedDate = null;
        } else {
            $this->ReceivedDate = $ReceivedDate->format(\DateTime::ATOM);
        }
        return $this;
    }

}
