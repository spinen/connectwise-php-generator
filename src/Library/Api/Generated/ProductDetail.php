<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductDetail
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $LineNumber
     */
    protected $LineNumber = null;

    /**
     * @var int $PickedQuantity
     */
    protected $PickedQuantity = null;

    /**
     * @var int $ShippedQuantity
     */
    protected $ShippedQuantity = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $WarehouseId
     */
    protected $WarehouseId = null;

    /**
     * @var int $WarehouseBinId
     */
    protected $WarehouseBinId = null;

    /**
     * @var int $ShipmentMethodId
     */
    protected $ShipmentMethodId = null;

    /**
     * @var ArrayOfInt $SerialNumberIds
     */
    protected $SerialNumberIds = null;

    /**
     * @var string $TrackingNumber
     */
    protected $TrackingNumber = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

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
     * @param int $PickedQuantity
     * @param int $ShippedQuantity
     * @param int $Quantity
     * @param \DateTime $LastUpdate
     */
    public function __construct($Id = null, $PickedQuantity = null, $ShippedQuantity = null, $Quantity = null, \DateTime $LastUpdate = null)
    {
        $this->Id              = $Id;
        $this->PickedQuantity  = $PickedQuantity;
        $this->ShippedQuantity = $ShippedQuantity;
        $this->Quantity        = $Quantity;
        $this->LastUpdate      = $LastUpdate ? $LastUpdate->format(\DateTime::ATOM) : null;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setLineNumber($LineNumber)
    {
        $this->LineNumber = $LineNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getPickedQuantity()
    {
        return $this->PickedQuantity;
    }

    /**
     * @param int $PickedQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setPickedQuantity($PickedQuantity)
    {
        $this->PickedQuantity = $PickedQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getShippedQuantity()
    {
        return $this->ShippedQuantity;
    }

    /**
     * @param int $ShippedQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setShippedQuantity($ShippedQuantity)
    {
        $this->ShippedQuantity = $ShippedQuantity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->WarehouseId;
    }

    /**
     * @param int $WarehouseId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setWarehouseId($WarehouseId)
    {
        $this->WarehouseId = $WarehouseId;
        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseBinId()
    {
        return $this->WarehouseBinId;
    }

    /**
     * @param int $WarehouseBinId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setWarehouseBinId($WarehouseBinId)
    {
        $this->WarehouseBinId = $WarehouseBinId;
        return $this;
    }

    /**
     * @return int
     */
    public function getShipmentMethodId()
    {
        return $this->ShipmentMethodId;
    }

    /**
     * @param int $ShipmentMethodId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setShipmentMethodId($ShipmentMethodId)
    {
        $this->ShipmentMethodId = $ShipmentMethodId;
        return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getSerialNumberIds()
    {
        return $this->SerialNumberIds;
    }

    /**
     * @param ArrayOfInt $SerialNumberIds
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setSerialNumberIds($SerialNumberIds)
    {
        $this->SerialNumberIds = $SerialNumberIds;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setTrackingNumber($TrackingNumber)
    {
        $this->TrackingNumber = $TrackingNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductDetail
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        return $this;
    }

}
