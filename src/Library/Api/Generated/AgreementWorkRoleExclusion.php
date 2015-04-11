<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AgreementWorkRoleExclusion
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
     * @var boolean $AddAllWorkRoles
     */
    protected $AddAllWorkRoles = null;

    /**
     * @var boolean $RemoveAllWorkRoles
     */
    protected $RemoveAllWorkRoles = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
     */
    public function setWorkRoleId($WorkRoleId)
    {
        $this->WorkRoleId = $WorkRoleId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAddAllWorkRoles()
    {
        return $this->AddAllWorkRoles;
    }

    /**
     * @param boolean $AddAllWorkRoles
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
     */
    public function setAddAllWorkRoles($AddAllWorkRoles)
    {
        $this->AddAllWorkRoles = $AddAllWorkRoles;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllWorkRoles()
    {
        return $this->RemoveAllWorkRoles;
    }

    /**
     * @param boolean $RemoveAllWorkRoles
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
     */
    public function setRemoveAllWorkRoles($RemoveAllWorkRoles)
    {
        $this->RemoveAllWorkRoles = $RemoveAllWorkRoles;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AgreementWorkRoleExclusion
     */
    public function setLastUpdate(\DateTime $LastUpdate)
    {
        $this->LastUpdate = $LastUpdate->format(\DateTime::ATOM);
        return $this;
    }

}
