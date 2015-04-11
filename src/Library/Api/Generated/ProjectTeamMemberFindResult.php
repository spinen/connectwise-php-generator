<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectTeamMemberFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var int $MemberId
     */
    protected $MemberId = null;

    /**
     * @var int $ProjectRoleId
     */
    protected $ProjectRoleId = null;

    /**
     * @var int $WorkRole
     */
    protected $WorkRole = null;

    /**
     * @var float $Hours
     */
    protected $Hours = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @param int $Id
     * @param int $ProjectId
     * @param int $MemberId
     * @param int $ProjectRoleId
     */
    public function __construct($Id = null, $ProjectId = null, $MemberId = null, $ProjectRoleId = null)
    {
        $this->Id            = $Id;
        $this->ProjectId     = $ProjectId;
        $this->MemberId      = $MemberId;
        $this->ProjectRoleId = $ProjectRoleId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setMemberId($MemberId)
    {
        $this->MemberId = $MemberId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectRoleId()
    {
        return $this->ProjectRoleId;
    }

    /**
     * @param int $ProjectRoleId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setProjectRoleId($ProjectRoleId)
    {
        $this->ProjectRoleId = $ProjectRoleId;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkRole()
    {
        return $this->WorkRole;
    }

    /**
     * @param int $WorkRole
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setWorkRole($WorkRole)
    {
        $this->WorkRole = $WorkRole;
        return $this;
    }

    /**
     * @return float
     */
    public function getHours()
    {
        return $this->Hours;
    }

    /**
     * @param float $Hours
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setHours($Hours)
    {
        $this->Hours = $Hours;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setStartDate(\DateTime $StartDate)
    {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectTeamMemberFindResult
     */
    public function setEndDate(\DateTime $EndDate)
    {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
        return $this;
    }

}
