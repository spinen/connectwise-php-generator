<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class MemberFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $MemberIdentifier
     */
    protected $MemberIdentifier = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var int $CalendarId
     */
    protected $CalendarId = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setMemberIdentifier($MemberIdentifier)
    {
        $this->MemberIdentifier = $MemberIdentifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated = null)
    {
        if ($LastUpdated == null) {
            $this->LastUpdated = null;
        } else {
            $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return int
     */
    public function getCalendarId()
    {
        return $this->CalendarId;
    }

    /**
     * @param int $CalendarId
     * @return \Spinen\ConnectWise\Library\Api\Generated\MemberFindResult
     */
    public function setCalendarId($CalendarId)
    {
        $this->CalendarId = $CalendarId;
        return $this;
    }

}
