<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementWorkType
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $WorkTypeId
     */
    protected $WorkTypeId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var RateType $RateType
     */
    protected $RateType = null;

    /**
     * @var float $Rate
     */
    protected $Rate = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var \DateTime $EndingDate
     */
    protected $EndingDate = null;

    /**
     * @var BillableOptions $BillTime
     */
    protected $BillTime = null;

    /**
     * @var float $HoursMin
     */
    protected $HoursMin = null;

    /**
     * @var float $HoursMax
     */
    protected $HoursMax = null;

    /**
     * @var int $AddressId
     */
    protected $AddressId = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->WorkTypeId;
    }

    /**
     * @param int $WorkTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setWorkTypeId($WorkTypeId)
    {
        $this->WorkTypeId = $WorkTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return RateType
     */
    public function getRateType()
    {
        return $this->RateType;
    }

    /**
     * @param RateType $RateType
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setRateType(RateType $RateType)
    {
        $this->RateType = $RateType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setRate($Rate)
    {
        $this->Rate = $Rate;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setEndingDate(\DateTime $EndingDate)
    {
        $this->EndingDate = $EndingDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return BillableOptions
     */
    public function getBillTime()
    {
        return $this->BillTime;
    }

    /**
     * @param BillableOptions $BillTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setBillTime(BillableOptions $BillTime)
    {
        $this->BillTime = $BillTime;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursMin()
    {
        return $this->HoursMin;
    }

    /**
     * @param float $HoursMin
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setHoursMin($HoursMin)
    {
        $this->HoursMin = $HoursMin;
        return $this;
    }

    /**
     * @return float
     */
    public function getHoursMax()
    {
        return $this->HoursMax;
    }

    /**
     * @param float $HoursMax
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setHoursMax($HoursMax)
    {
        $this->HoursMax = $HoursMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->AddressId;
    }

    /**
     * @param int $AddressId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setAddressId($AddressId)
    {
        $this->AddressId = $AddressId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkType
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

}
