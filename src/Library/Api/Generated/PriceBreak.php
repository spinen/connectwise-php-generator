<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PriceBreak
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $PricingDetailId
     */
    protected $PricingDetailId = null;

    /**
     * @var int $StartQuantity
     */
    protected $StartQuantity = null;

    /**
     * @var int $EndQuantity
     */
    protected $EndQuantity = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var InventoryPriceMethod $InventoryPriceMethodIdentifier
     */
    protected $InventoryPriceMethodIdentifier = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @param int $Id
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $UpdatedBy = null)
    {
        $this->Id        = $Id;
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getPricingDetailId()
    {
        return $this->PricingDetailId;
    }

    /**
     * @param int $PricingDetailId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setPricingDetailId($PricingDetailId)
    {
        $this->PricingDetailId = $PricingDetailId;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartQuantity()
    {
        return $this->StartQuantity;
    }

    /**
     * @param int $StartQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setStartQuantity($StartQuantity)
    {
        $this->StartQuantity = $StartQuantity;
        return $this;
    }

    /**
     * @return int
     */
    public function getEndQuantity()
    {
        return $this->EndQuantity;
    }

    /**
     * @param int $EndQuantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setEndQuantity($EndQuantity)
    {
        $this->EndQuantity = $EndQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
        return $this;
    }

    /**
     * @return InventoryPriceMethod
     */
    public function getInventoryPriceMethodIdentifier()
    {
        return $this->InventoryPriceMethodIdentifier;
    }

    /**
     * @param InventoryPriceMethod $InventoryPriceMethodIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setInventoryPriceMethodIdentifier(InventoryPriceMethod $InventoryPriceMethodIdentifier)
    {
        $this->InventoryPriceMethodIdentifier = $InventoryPriceMethodIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PriceBreak
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
