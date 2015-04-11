<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ActivityScheduleEntry
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $ActivityId
     */
    protected $ActivityId = null;

    /**
     * @var int $MemberId
     */
    protected $MemberId = null;

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

    /**
     * @var int $LocationId
     */
    protected $LocationId = null;

    /**
     * @var boolean $Done
     */
    protected $Done = null;

    /**
     * @var boolean $Acknowledged
     */
    protected $Acknowledged = null;

    /**
     * @var boolean $AllowScheduleConflicts
     */
    protected $AllowScheduleConflicts = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @param int $Id
     * @param string $MemberIdentifier
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $MemberIdentifier = null, $UpdatedBy = null)
    {
        $this->Id               = $Id;
        $this->MemberIdentifier = $MemberIdentifier;
        $this->UpdatedBy        = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param int $ActivityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setActivityId($ActivityId)
    {
        $this->ActivityId = $ActivityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setMemberId($MemberId)
    {
        $this->MemberId = $MemberId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberIdentifier()
    {
        return $this->MemberIdentifier;
    }

    /**
     * @param string $MemberIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDone()
    {
        return $this->Done;
    }

    /**
     * @param boolean $Done
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setDone($Done)
    {
        $this->Done = $Done;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAcknowledged()
    {
        return $this->Acknowledged;
    }

    /**
     * @param boolean $Acknowledged
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setAcknowledged($Acknowledged)
    {
        $this->Acknowledged = $Acknowledged;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowScheduleConflicts()
    {
        return $this->AllowScheduleConflicts;
    }

    /**
     * @param boolean $AllowScheduleConflicts
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setAllowScheduleConflicts($AllowScheduleConflicts)
    {
        $this->AllowScheduleConflicts = $AllowScheduleConflicts;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityScheduleEntry
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
