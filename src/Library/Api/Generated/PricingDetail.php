<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PricingDetail
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $PricingScheduleId
     */
    protected $PricingScheduleId = null;

    /**
     * @var int $ProductId
     */
    protected $ProductId = null;

    /**
     * @var int $CategoryId
     */
    protected $CategoryId = null;

    /**
     * @var int $SubCategoryId
     */
    protected $SubCategoryId = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var boolean $NoEndDateFlag
     */
    protected $NoEndDateFlag = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getPricingScheduleId()
    {
        return $this->PricingScheduleId;
    }

    /**
     * @param int $PricingScheduleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setPricingScheduleId($PricingScheduleId)
    {
        $this->PricingScheduleId = $PricingScheduleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setCategoryId($CategoryId)
    {
        $this->CategoryId = $CategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubCategoryId()
    {
        return $this->SubCategoryId;
    }

    /**
     * @param int $SubCategoryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setSubCategoryId($SubCategoryId)
    {
        $this->SubCategoryId = $SubCategoryId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if ($this->StartDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
        if ($StartDate == null) {
            $this->StartDate = null;
        } else {
            $this->StartDate = $StartDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if ($this->EndDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
        if ($EndDate == null) {
            $this->EndDate = null;
        } else {
            $this->EndDate = $EndDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNoEndDateFlag()
    {
        return $this->NoEndDateFlag;
    }

    /**
     * @param boolean $NoEndDateFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setNoEndDateFlag($NoEndDateFlag)
    {
        $this->NoEndDateFlag = $NoEndDateFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
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

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingDetail
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
