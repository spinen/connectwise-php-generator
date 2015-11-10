<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PricingSchedule
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $InactiveFlag
     */
    protected $InactiveFlag = null;

    /**
     * @var boolean $DefaultFlag
     */
    protected $DefaultFlag = null;

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
     * @param string $Name
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $Name = null, $UpdatedBy = null)
    {
        $this->Id        = $Id;
        $this->Name      = $Name;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingSchedule
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingSchedule
     */
    public function setName($Name)
    {
        $this->Name = $Name;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInactiveFlag()
    {
        return $this->InactiveFlag;
    }

    /**
     * @param boolean $InactiveFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingSchedule
     */
    public function setInactiveFlag($InactiveFlag)
    {
        $this->InactiveFlag = $InactiveFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultFlag()
    {
        return $this->DefaultFlag;
    }

    /**
     * @param boolean $DefaultFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingSchedule
     */
    public function setDefaultFlag($DefaultFlag)
    {
        $this->DefaultFlag = $DefaultFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingSchedule
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\PricingSchedule
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
