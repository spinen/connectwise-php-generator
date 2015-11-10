<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementWorkTypeExclusion
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
     * @var int $WorkTypeId
     */
    protected $WorkTypeId = null;

    /**
     * @var boolean $AddAllWorkTypes
     */
    protected $AddAllWorkTypes = null;

    /**
     * @var boolean $RemoveAllWorkTypes
     */
    protected $RemoveAllWorkTypes = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
     */
    public function setWorkTypeId($WorkTypeId)
    {
        $this->WorkTypeId = $WorkTypeId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddAllWorkTypes()
    {
        return $this->AddAllWorkTypes;
    }

    /**
     * @param boolean $AddAllWorkTypes
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
     */
    public function setAddAllWorkTypes($AddAllWorkTypes)
    {
        $this->AddAllWorkTypes = $AddAllWorkTypes;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllWorkTypes()
    {
        return $this->RemoveAllWorkTypes;
    }

    /**
     * @param boolean $RemoveAllWorkTypes
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
     */
    public function setRemoveAllWorkTypes($RemoveAllWorkTypes)
    {
        $this->RemoveAllWorkTypes = $RemoveAllWorkTypes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkTypeExclusion
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        return $this;
    }

}
