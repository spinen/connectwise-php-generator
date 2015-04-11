<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProductFindResult
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
     * @var string $SubCategory
     */
    protected $SubCategory = null;

    /**
     * @var string $UOM
     */
    protected $UOM = null;

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
     * @var string $Class
     */
    protected $Class = null;

    /**
     * @var boolean $IsPhaseProduct
     */
    protected $IsPhaseProduct = null;

    /**
     * @var boolean $Inactive
     */
    protected $Inactive = null;

    /**
     * @var string $LongDescription
     */
    protected $LongDescription = null;

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
     * @var string $VendorSKU
     */
    protected $VendorSKU = null;

    /**
     * @var string $ManufacturerPartNumber
     */
    protected $ManufacturerPartNumber = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @param int $Id
     * @param string $ItemIdentifier
     * @param string $Description
     * @param string $Type
     * @param string $Category
     * @param string $SubCategory
     * @param string $UOM
     * @param string $Class
     * @param string $LongDescription
     * @param string $Manufacturer
     * @param string $Vendor
     * @param string $VendorSKU
     * @param string $ManufacturerPartNumber
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $ItemIdentifier = null, $Description = null, $Type = null, $Category = null, $SubCategory = null, $UOM = null, $Class = null, $LongDescription = null, $Manufacturer = null, $Vendor = null, $VendorSKU = null, $ManufacturerPartNumber = null, $UpdatedBy = null)
    {
        $this->Id                     = $Id;
        $this->ItemIdentifier         = $ItemIdentifier;
        $this->Description            = $Description;
        $this->Type                   = $Type;
        $this->Category               = $Category;
        $this->SubCategory            = $SubCategory;
        $this->UOM                    = $UOM;
        $this->Class                  = $Class;
        $this->LongDescription        = $LongDescription;
        $this->Manufacturer           = $Manufacturer;
        $this->Vendor                 = $Vendor;
        $this->VendorSKU              = $VendorSKU;
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
        $this->UpdatedBy              = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setCategory($Category)
    {
        $this->Category = $Category;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubCategory()
    {
        return $this->SubCategory;
    }

    /**
     * @param string $SubCategory
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setSubCategory($SubCategory)
    {
        $this->SubCategory = $SubCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getUOM()
    {
        return $this->UOM;
    }

    /**
     * @param string $UOM
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setUOM($UOM)
    {
        $this->UOM = $UOM;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setTaxable($Taxable)
    {
        $this->Taxable = $Taxable;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setIsPhaseProduct($IsPhaseProduct)
    {
        $this->IsPhaseProduct = $IsPhaseProduct;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setInactive($Inactive)
    {
        $this->Inactive = $Inactive;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setLongDescription($LongDescription)
    {
        $this->LongDescription = $LongDescription;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setVendor($Vendor)
    {
        $this->Vendor = $Vendor;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setVendorSKU($VendorSKU)
    {
        $this->VendorSKU = $VendorSKU;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setManufacturerPartNumber($ManufacturerPartNumber)
    {
        $this->ManufacturerPartNumber = $ManufacturerPartNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProductFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
