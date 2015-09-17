<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class BillingInfo
{

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $AgreementTypeId
     */
    protected $AgreementTypeId = null;

    /**
     * @var string $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var \DateTime $BillingDate
     */
    protected $BillingDate = null;

    /**
     * @var \DateTime $CancelDate
     */
    protected $CancelDate = null;

    /**
     * @var string $BillingDescription
     */
    protected $BillingDescription = null;

    /**
     * @var int $SiteId
     */
    protected $SiteId = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $Cost
     */
    protected $Cost = null;

    /**
     * @param int $SiteId
     * @param float $Price
     * @param float $Cost
     */
    public function __construct($SiteId = null, $Price = null, $Cost = null)
    {
        $this->SiteId = $SiteId;
        $this->Price  = $Price;
        $this->Cost   = $Cost;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementTypeId()
    {
        return $this->AgreementTypeId;
    }

    /**
     * @param int $AgreementTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setAgreementTypeId($AgreementTypeId)
    {
        $this->AgreementTypeId = $AgreementTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setSerialNumber($SerialNumber)
    {
        $this->SerialNumber = $SerialNumber;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBillingDate()
    {
        if ($this->BillingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->BillingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $BillingDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setBillingDate(\DateTime $BillingDate = null)
    {
        if ($BillingDate == null) {
            $this->BillingDate = null;
        } else {
            $this->BillingDate = $BillingDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelDate()
    {
        if ($this->CancelDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->CancelDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $CancelDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setCancelDate(\DateTime $CancelDate = null)
    {
        if ($CancelDate == null) {
            $this->CancelDate = null;
        } else {
            $this->CancelDate = $CancelDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingDescription()
    {
        return $this->BillingDescription;
    }

    /**
     * @param string $BillingDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setBillingDescription($BillingDescription)
    {
        $this->BillingDescription = $BillingDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param int $SiteId
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setSiteId($SiteId)
    {
        $this->SiteId = $SiteId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\BillingInfo
     */
    public function setCost($Cost)
    {
        $this->Cost = $Cost;
        return $this;
    }

}
