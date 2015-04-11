<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AdditionsProduct
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
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $ProductTypeId
     */
    protected $ProductTypeId = null;

    /**
     * @var int $CategoryId
     */
    protected $CategoryId = null;

    /**
     * @var int $SubcategoryId
     */
    protected $SubcategoryId = null;

    /**
     * @var int $UomId
     */
    protected $UomId = null;

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
     * @var string $LongDescription
     */
    protected $LongDescription = null;

    /**
     * @var boolean $Inactive
     */
    protected $Inactive = null;

    /**
     * @var boolean $Serialized
     */
    protected $Serialized = null;

    /**
     * @var boolean $ApplyCostBySerialNumber
     */
    protected $ApplyCostBySerialNumber = null;

    /**
     * @var int $ManufacturerId
     */
    protected $ManufacturerId = null;

    /**
     * @var string $ManufacturerPartNumber
     */
    protected $ManufacturerPartNumber = null;

    /**
     * @var int $VendorId
     */
    protected $VendorId = null;

    /**
     * @var string $VendorSku
     */
    protected $VendorSku = null;

    /**
     * @var ProductClass $ProductClass
     */
    protected $ProductClass = null;

    /**
     * @var PriceAttribute $PriceAttribute
     */
    protected $PriceAttribute = null;

    /**
     * @var int $MinimumStock
     */
    protected $MinimumStock = null;

    /**
     * @param int $Id
     * @param string $ItemIdentifier
     * @param string $Description
     * @param string $LongDescription
     * @param string $ManufacturerPartNumber
     * @param string $VendorSku
     */
    public function __construct($Id = null, $ItemIdentifier = null, $Description = null, $LongDescription = null, $ManufacturerPartNumber = null, $VendorSku = null)
    {
        $this->Id                     = $Id;
        $this->ItemIdentifier         = $ItemIdentifier;
        $this->Description            = $Description;
        $this->LongDescription        = $LongDescription;
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
        $this->VendorSku              = $VendorSku;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductTypeId()
    {
        return $this->ProductTypeId;
    }

    /**
     * @param int $ProductTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setProductTypeId($ProductTypeId)
    {
        $this->ProductTypeId = $ProductTypeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->CategoryId;
    }

    /**
     * @param int $CategoryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setCategoryId($CategoryId)
    {
        $this->CategoryId = $CategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubcategoryId()
    {
        return $this->SubcategoryId;
    }

    /**
     * @param int $SubcategoryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setSubcategoryId($SubcategoryId)
    {
        $this->SubcategoryId = $SubcategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUomId()
    {
        return $this->UomId;
    }

    /**
     * @param int $UomId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setUomId($UomId)
    {
        $this->UomId = $UomId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setLongDescription($LongDescription)
    {
        $this->LongDescription = $LongDescription;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setSerialized($Serialized)
    {
        $this->Serialized = $Serialized;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyCostBySerialNumber()
    {
        return $this->ApplyCostBySerialNumber;
    }

    /**
     * @param boolean $ApplyCostBySerialNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setApplyCostBySerialNumber($ApplyCostBySerialNumber)
    {
        $this->ApplyCostBySerialNumber = $ApplyCostBySerialNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->ManufacturerId;
    }

    /**
     * @param int $ManufacturerId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setManufacturerId($ManufacturerId)
    {
        $this->ManufacturerId = $ManufacturerId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setManufacturerPartNumber($ManufacturerPartNumber)
    {
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getVendorId()
    {
        return $this->VendorId;
    }

    /**
     * @param int $VendorId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setVendorId($VendorId)
    {
        $this->VendorId = $VendorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorSku()
    {
        return $this->VendorSku;
    }

    /**
     * @param string $VendorSku
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setVendorSku($VendorSku)
    {
        $this->VendorSku = $VendorSku;
        return $this;
    }

    /**
     * @return ProductClass
     */
    public function getProductClass()
    {
        return $this->ProductClass;
    }

    /**
     * @param ProductClass $ProductClass
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setProductClass(ProductClass $ProductClass)
    {
        $this->ProductClass = $ProductClass;
        return $this;
    }

    /**
     * @return PriceAttribute
     */
    public function getPriceAttribute()
    {
        return $this->PriceAttribute;
    }

    /**
     * @param PriceAttribute $PriceAttribute
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setPriceAttribute(PriceAttribute $PriceAttribute)
    {
        $this->PriceAttribute = $PriceAttribute;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumStock()
    {
        return $this->MinimumStock;
    }

    /**
     * @param int $MinimumStock
     * @return \Spinen\ConnectWise\Library\Api\Generated\AdditionsProduct
     */
    public function setMinimumStock($MinimumStock)
    {
        $this->MinimumStock = $MinimumStock;
        return $this;
    }

}
