<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementWorkRoleFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $WorkRoleId
     */
    protected $WorkRoleId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var float $LimitTo
     */
    protected $LimitTo = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var \DateTime $EndingDate
     */
    protected $EndingDate = null;

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
     * @param \DateTime $LastUpdate
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, \DateTime $LastUpdate = null, $UpdatedBy = null)
    {
        $this->Id         = $Id;
        $this->LastUpdate = $LastUpdate ? $LastUpdate->format(\DateTime::ATOM) : null;
        $this->UpdatedBy  = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkRoleId()
    {
        return $this->WorkRoleId;
    }

    /**
     * @param int $WorkRoleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setWorkRoleId($WorkRoleId)
    {
        $this->WorkRoleId = $WorkRoleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param int $LocationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->Rate;
    }

    /**
     * @param float $Rate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getLimitTo()
    {
        return $this->LimitTo;
    }

    /**
     * @param float $LimitTo
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setLimitTo($LimitTo)
    {
        $this->LimitTo = $LimitTo;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setEffectiveDate(\DateTime $EffectiveDate)
    {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndingDate()
    {
        if ($this->EndingDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndingDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndingDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setEndingDate(\DateTime $EndingDate)
    {
        $this->EndingDate = $EndingDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
