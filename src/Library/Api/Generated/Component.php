<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Component
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var int $ParentId
     */
    protected $ParentId = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $ItemId
     */
    protected $ItemId = null;

    /**
     * @var boolean $HidePrice
     */
    protected $HidePrice = null;

    /**
     * @var boolean $HideItemId
     */
    protected $HideItemId = null;

    /**
     * @var boolean $HideDescription
     */
    protected $HideDescription = null;

    /**
     * @var boolean $HideQuantity
     */
    protected $HideQuantity = null;

    /**
     * @var string $Warehouse
     */
    protected $Warehouse = null;

    /**
     * @var string $Bin
     */
    protected $Bin = null;

    /**
     * @var string $ItemIdentifier
     */
    protected $ItemIdentifier = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var boolean $Taxable
     */
    protected $Taxable = null;

    /**
     * @var boolean $Inactive
     */
    protected $Inactive = null;

    /**
     * @var boolean $Serialized
     */
    protected $Serialized = null;

    /**
     * @param int $Id
     * @param string $Warehouse
     * @param string $Bin
     * @param string $ItemIdentifier
     * @param string $Description
     */
    public function __construct($Id = null, $Warehouse = null, $Bin = null, $ItemIdentifier = null, $Description = null)
    {
        $this->Id             = $Id;
        $this->Warehouse      = $Warehouse;
        $this->Bin            = $Bin;
        $this->ItemIdentifier = $ItemIdentifier;
        $this->Description    = $Description;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setSequenceNumber($SequenceNumber)
    {
        $this->SequenceNumber = $SequenceNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->ParentId;
    }

    /**
     * @param int $ParentId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setParentId($ParentId)
    {
        $this->ParentId = $ParentId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setItemId($ItemId)
    {
        $this->ItemId = $ItemId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHidePrice()
    {
        return $this->HidePrice;
    }

    /**
     * @param boolean $HidePrice
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setHidePrice($HidePrice)
    {
        $this->HidePrice = $HidePrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHideItemId()
    {
        return $this->HideItemId;
    }

    /**
     * @param boolean $HideItemId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setHideItemId($HideItemId)
    {
        $this->HideItemId = $HideItemId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHideDescription()
    {
        return $this->HideDescription;
    }

    /**
     * @param boolean $HideDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setHideDescription($HideDescription)
    {
        $this->HideDescription = $HideDescription;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getHideQuantity()
    {
        return $this->HideQuantity;
    }

    /**
     * @param boolean $HideQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setHideQuantity($HideQuantity)
    {
        $this->HideQuantity = $HideQuantity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setBin($Bin)
    {
        $this->Bin = $Bin;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setItemIdentifier($ItemIdentifier)
    {
        $this->ItemIdentifier = $ItemIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setCost($Cost)
    {
        $this->Cost = $Cost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
        return $this->Inactive;
    }

    /**
     * @param boolean $Inactive
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setInactive($Inactive)
    {
        $this->Inactive = $Inactive;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSerialized()
    {
        return $this->Serialized;
    }

    /**
     * @param boolean $Serialized
     * @return \Spinen\ConnectWise\Library\Api\Generated\Component
     */
    public function setSerialized($Serialized)
    {
        $this->Serialized = $Serialized;
        return $this;
    }

}
