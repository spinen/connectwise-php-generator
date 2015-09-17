<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Product
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
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $Subcategory
     */
    protected $Subcategory = null;

    /**
     * @var string $Uom
     */
    protected $Uom = null;

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
     * @var string $Manufacturer
     */
    protected $Manufacturer = null;

    /**
     * @var string $Vendor
     */
    protected $Vendor = null;

    /**
     * @var string $VendorSku
     */
    protected $VendorSku = null;

    /**
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var boolean $IsPhaseProduct
     */
    protected $IsPhaseProduct = null;

    /**
     * @var string $ManufacturerPartNumber
     */
    protected $ManufacturerPartNumber = null;

    /**
     * @var string $PriceAttribute
     */
    protected $PriceAttribute = null;

    /**
     * @var ArrayOfComponent $BundleComponents
     */
    protected $BundleComponents = null;

    /**
     * @param int $Id
     * @param float $Cost
     * @param float $Price
     * @param boolean $Taxable
     * @param boolean $Inactive
     * @param boolean $Serialized
     * @param boolean $IsPhaseProduct
     */
    public function __construct($Id = null, $Cost = null, $Price = null, $Taxable = null, $Inactive = null, $Serialized = null, $IsPhaseProduct = null)
    {
        $this->Id             = $Id;
        $this->Cost           = $Cost;
        $this->Price          = $Price;
        $this->Taxable        = $Taxable;
        $this->Inactive       = $Inactive;
        $this->Serialized     = $Serialized;
        $this->IsPhaseProduct = $IsPhaseProduct;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setType($Type)
    {
        $this->Type = $Type;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubcategory()
    {
        return $this->Subcategory;
    }

    /**
     * @param string $Subcategory
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setSubcategory($Subcategory)
    {
        $this->Subcategory = $Subcategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getUom()
    {
        return $this->Uom;
    }

    /**
     * @param string $Uom
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setUom($Uom)
    {
        $this->Uom = $Uom;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setSerialized($Serialized)
    {
        $this->Serialized = $Serialized;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setManufacturer($Manufacturer)
    {
        $this->Manufacturer = $Manufacturer;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->Vendor;
    }

    /**
     * @param string $Vendor
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setVendor($Vendor)
    {
        $this->Vendor = $Vendor;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setVendorSku($VendorSku)
    {
        $this->VendorSku = $VendorSku;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->Class;
    }

    /**
     * @param string $Class
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setClass($Class)
    {
        $this->Class = $Class;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setIsPhaseProduct($IsPhaseProduct)
    {
        $this->IsPhaseProduct = $IsPhaseProduct;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setManufacturerPartNumber($ManufacturerPartNumber)
    {
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceAttribute()
    {
        return $this->PriceAttribute;
    }

    /**
     * @param string $PriceAttribute
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setPriceAttribute($PriceAttribute)
    {
        $this->PriceAttribute = $PriceAttribute;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Product
     */
    public function setBundleComponents($BundleComponents)
    {
        $this->BundleComponents = $BundleComponents;
        return $this;
    }

}
