<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CompanyTeam
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $TeamRoleId
     */
    protected $TeamRoleId = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var int $DepartmentId
     */
    protected $DepartmentId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $MemberId
     */
    protected $MemberId = null;

    /**
     * @var boolean $AccountManagerFlag
     */
    protected $AccountManagerFlag = null;

    /**
     * @var boolean $TechFlag
     */
    protected $TechFlag = null;

    /**
     * @var boolean $SalesFlag
     */
    protected $SalesFlag = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdatedUTC
     */
    protected $LastUpdatedUTC = null;

    /**
     * @param int $Id
     * @param int $CompanyId
     * @param int $TeamRoleId
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $CompanyId = null, $TeamRoleId = null, $UpdatedBy = null)
    {
        $this->Id         = $Id;
        $this->CompanyId  = $CompanyId;
        $this->TeamRoleId = $TeamRoleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeamRoleId()
    {
        return $this->TeamRoleId;
    }

    /**
     * @param int $TeamRoleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setTeamRoleId($TeamRoleId)
    {
        $this->TeamRoleId = $TeamRoleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->DepartmentId;
    }

    /**
     * @param int $DepartmentId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setDepartmentId($DepartmentId)
    {
        $this->DepartmentId = $DepartmentId;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param int $ContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMemberId()
    {
        return $this->MemberId;
    }

    /**
     * @param int $MemberId
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setMemberId($MemberId)
    {
        $this->MemberId = $MemberId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAccountManagerFlag()
    {
        return $this->AccountManagerFlag;
    }

    /**
     * @param boolean $AccountManagerFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setAccountManagerFlag($AccountManagerFlag)
    {
        $this->AccountManagerFlag = $AccountManagerFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getTechFlag()
    {
        return $this->TechFlag;
    }

    /**
     * @param boolean $TechFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setTechFlag($TechFlag)
    {
        $this->TechFlag = $TechFlag;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSalesFlag()
    {
        return $this->SalesFlag;
    }

    /**
     * @param boolean $SalesFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setSalesFlag($SalesFlag)
    {
        $this->SalesFlag = $SalesFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdatedUTC()
    {
        if ($this->LastUpdatedUTC == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdatedUTC);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdatedUTC
     * @return \Spinen\ConnectWise\Library\Api\Generated\CompanyTeam
     */
    public function setLastUpdatedUTC(\DateTime $LastUpdatedUTC)
    {
        $this->LastUpdatedUTC = $LastUpdatedUTC->format(\DateTime::ATOM);
        return $this;
    }

}
