<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Activity
{

    /**
     * @var string $CompanyIdentifier
     */
    protected $CompanyIdentifier = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var ActivityDuration $TimeRange
     */
    protected $TimeRange = null;

    /**
     * @var int $ReminderMinutes
     */
    protected $ReminderMinutes = null;

    /**
     * @var string $Campaign
     */
    protected $Campaign = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var string $AssignTo
     */
    protected $AssignTo = null;

    /**
     * @var ContactInformation $Contact
     */
    protected $Contact = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var \DateTime $DateClosed
     */
    protected $DateClosed = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var boolean $Automated
     */
    protected $Automated = null;

    /**
     * @param string $CompanyIdentifier
     * @param int $Id
     * @param string $Subject
     * @param string $Status
     * @param string $Type
     * @param ActivityDuration $TimeRange
     * @param string $Campaign
     * @param string $Notes
     * @param string $AssignTo
     * @param ContactInformation $Contact
     * @param boolean $Automated
     */
    public function __construct($CompanyIdentifier = null, $Id = null, $Subject = null, $Status = null, $Type = null, ActivityDuration $TimeRange = null, $Campaign = null, $Notes = null, $AssignTo = null, ContactInformation $Contact = null, $Automated = null)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        $this->Id                = $Id;
        $this->Subject           = $Subject;
        $this->Status            = $Status;
        $this->Type              = $Type;
        $this->TimeRange         = $TimeRange;
        $this->Campaign          = $Campaign;
        $this->Notes             = $Notes;
        $this->AssignTo          = $AssignTo;
        $this->Contact           = $Contact;
        $this->Automated         = $Automated;
    }

    /**
     * @return string
     */
    public function getCompanyIdentifier()
    {
        return $this->CompanyIdentifier;
    }

    /**
     * @param string $CompanyIdentifier
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setCompanyIdentifier($CompanyIdentifier)
    {
        $this->CompanyIdentifier = $CompanyIdentifier;
        return $this;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setType($Type)
    {
        $this->Type = $Type;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setDueDate(\DateTime $DueDate)
    {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return ActivityDuration
     */
    public function getTimeRange()
    {
        return $this->TimeRange;
    }

    /**
     * @param ActivityDuration $TimeRange
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setTimeRange(ActivityDuration $TimeRange)
    {
        $this->TimeRange = $TimeRange;
        return $this;
    }

    /**
     * @return int
     */
    public function getReminderMinutes()
    {
        return $this->ReminderMinutes;
    }

    /**
     * @param int $ReminderMinutes
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setReminderMinutes($ReminderMinutes)
    {
        $this->ReminderMinutes = $ReminderMinutes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setCampaign($Campaign)
    {
        $this->Campaign = $Campaign;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssignTo()
    {
        return $this->AssignTo;
    }

    /**
     * @param string $AssignTo
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setAssignTo($AssignTo)
    {
        $this->AssignTo = $AssignTo;
        return $this;
    }

    /**
     * @return ContactInformation
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param ContactInformation $Contact
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setContact(ContactInformation $Contact)
    {
        $this->Contact = $Contact;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->OpportunityId;
    }

    /**
     * @param int $OpportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateClosed()
    {
        if ($this->DateClosed == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateClosed);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateClosed
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setDateClosed(\DateTime $DateClosed)
    {
        $this->DateClosed = $DateClosed->format(\DateTime::ATOM);
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAutomated()
    {
        return $this->Automated;
    }

    /**
     * @param boolean $Automated
     * @return \Spinen\ConnectWise\Library\Api\Generated\Activity
     */
    public function setAutomated($Automated)
    {
        $this->Automated = $Automated;
        return $this;
    }

}
