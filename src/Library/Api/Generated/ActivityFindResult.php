<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ActivityFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $ContactFirstName
     */
    protected $ContactFirstName = null;

    /**
     * @var string $ContactLastName
     */
    protected $ContactLastName = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $EmailAddress
     */
    protected $EmailAddress = null;

    /**
     * @var string $ActivityStatusDescription
     */
    protected $ActivityStatusDescription = null;

    /**
     * @var string $ActivityTypeDescription
     */
    protected $ActivityTypeDescription = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $Resources
     */
    protected $Resources = null;

    /**
     * @var string $AssignToResource
     */
    protected $AssignToResource = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var string $OpportunityName
     */
    protected $OpportunityName = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var string $Agreement
     */
    protected $Agreement = null;

    /**
     * @var string $Campaign
     */
    protected $Campaign = null;

    /**
     * @var boolean $ClosedFlag
     */
    protected $ClosedFlag = null;

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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactFirstName()
    {
        return $this->ContactFirstName;
    }

    /**
     * @param string $ContactFirstName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setContactFirstName($ContactFirstName)
    {
        $this->ContactFirstName = $ContactFirstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactLastName()
    {
        return $this->ContactLastName;
    }

    /**
     * @param string $ContactLastName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setContactLastName($ContactLastName)
    {
        $this->ContactLastName = $ContactLastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityStatusDescription()
    {
        return $this->ActivityStatusDescription;
    }

    /**
     * @param string $ActivityStatusDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setActivityStatusDescription($ActivityStatusDescription)
    {
        $this->ActivityStatusDescription = $ActivityStatusDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getActivityTypeDescription()
    {
        return $this->ActivityTypeDescription;
    }

    /**
     * @param string $ActivityTypeDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setActivityTypeDescription($ActivityTypeDescription)
    {
        $this->ActivityTypeDescription = $ActivityTypeDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getResources()
    {
        return $this->Resources;
    }

    /**
     * @param string $Resources
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setResources($Resources)
    {
        $this->Resources = $Resources;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignToResource()
    {
        return $this->AssignToResource;
    }

    /**
     * @param string $AssignToResource
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setAssignToResource($AssignToResource)
    {
        $this->AssignToResource = $AssignToResource;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
        if ($this->DueDate == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DueDate);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DueDate
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
        if ($DueDate == null) {
            $this->DueDate = null;
        } else {
            $this->DueDate = $DueDate->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        if ($this->StartTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->StartTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $StartTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
        if ($StartTime == null) {
            $this->StartTime = null;
        } else {
            $this->StartTime = $StartTime->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
        if ($this->EndTime == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->EndTime);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $EndTime
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setEndTime(\DateTime $EndTime = null)
    {
        if ($EndTime == null) {
            $this->EndTime = null;
        } else {
            $this->EndTime = $EndTime->format(\DateTime::ATOM);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->OpportunityName;
    }

    /**
     * @param string $OpportunityName
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setOpportunityName($OpportunityName)
    {
        $this->OpportunityName = $OpportunityName;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->TicketId;
    }

    /**
     * @param int $TicketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAgreement()
    {
        return $this->Agreement;
    }

    /**
     * @param string $Agreement
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setAgreement($Agreement)
    {
        $this->Agreement = $Agreement;
        return $this;
    }

    /**
     * @return string
     */
    public function getCampaign()
    {
        return $this->Campaign;
    }

    /**
     * @param string $Campaign
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setCampaign($Campaign)
    {
        $this->Campaign = $Campaign;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getClosedFlag()
    {
        return $this->ClosedFlag;
    }

    /**
     * @param boolean $ClosedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
     */
    public function setClosedFlag($ClosedFlag)
    {
        $this->ClosedFlag = $ClosedFlag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ActivityFindResult
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

}
