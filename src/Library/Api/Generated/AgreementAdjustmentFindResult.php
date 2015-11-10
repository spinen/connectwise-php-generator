<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementAdjustmentFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var float $AdjustmentAmount
     */
    protected $AdjustmentAmount = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @param int $Id
     * @param string $Description
     * @param \DateTime $LastUpdate
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $Description = null, \DateTime $LastUpdate = null, $UpdatedBy = null)
    {
        $this->Id          = $Id;
        $this->Description = $Description;
        $this->LastUpdate  = $LastUpdate ? $LastUpdate->format(\DateTime::ATOM) : null;
        $this->UpdatedBy   = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return float
     */
    public function getAdjustmentAmount()
    {
        return $this->AdjustmentAmount;
    }

    /**
     * @param float $AdjustmentAmount
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setAdjustmentAmount($AdjustmentAmount)
    {
        $this->AdjustmentAmount = $AdjustmentAmount;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        if ($this->EffectiveDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EffectiveDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setEffectiveDate(\DateTime $EffectiveDate)
    {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementAdjustmentFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
