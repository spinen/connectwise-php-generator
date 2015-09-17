<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementExclusionFindResult
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
     * @var int $WorkRoleId
     */
    protected $WorkRoleId = null;

    /**
     * @var int $WorkTypeId
     */
    protected $WorkTypeId = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementExclusionFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementExclusionFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementExclusionFindResult
     */
    public function setWorkRoleId($WorkRoleId)
    {
        $this->WorkRoleId = $WorkRoleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementExclusionFindResult
     */
    public function setWorkTypeId($WorkTypeId)
    {
        $this->WorkTypeId = $WorkTypeId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementExclusionFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementExclusionFindResult
     */
    public function setLastUpdate(\DateTime $LastUpdate = null)
    {
        if ($LastUpdate == null) {
            $this->LastUpdate = null;
        } else {
            $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        }
        return $this;
    }

}
