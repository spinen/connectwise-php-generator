<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class TicketNote
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $CustomerUpdatedFlag
     */
    protected $CustomerUpdatedFlag = null;

    /**
     * @var string $NoteText
     */
    protected $NoteText = null;

    /**
     * @var boolean $IsInternalNote
     */
    protected $IsInternalNote = null;

    /**
     * @var boolean $IsExternalNote
     */
    protected $IsExternalNote = null;

    /**
     * @var boolean $ProcessNotifications
     */
    protected $ProcessNotifications = null;

    /**
     * @var boolean $IsPartOfDetailDescription
     */
    protected $IsPartOfDetailDescription = null;

    /**
     * @var boolean $IsPartOfInternalAnalysis
     */
    protected $IsPartOfInternalAnalysis = null;

    /**
     * @var boolean $IsPartOfResolution
     */
    protected $IsPartOfResolution = null;

    /**
     * @var int $MemberId
     */
    protected $MemberId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var \DateTime $DateCreated
     */
    protected $DateCreated = null;

    /**
     * @var string $CreatedBy
     */
    protected $CreatedBy = null;

    /**
     * @var string $MemberFullName
     */
    protected $MemberFullName = null;

    /**
     * @var \DateTime $DateCreatedUtc
     */
    protected $DateCreatedUtc = null;

    /**
     * @param int $Id
     * @param boolean $CustomerUpdatedFlag
     * @param string $NoteText
     * @param boolean $IsInternalNote
     * @param boolean $IsExternalNote
     * @param boolean $ProcessNotifications
     * @param boolean $IsPartOfDetailDescription
     * @param boolean $IsPartOfInternalAnalysis
     * @param boolean $IsPartOfResolution
     * @param int $MemberId
     * @param int $ContactId
     * @param string $CreatedBy
     * @param string $MemberFullName
     */
    public function __construct($Id = null, $CustomerUpdatedFlag = null, $NoteText = null, $IsInternalNote = null, $IsExternalNote = null, $ProcessNotifications = null, $IsPartOfDetailDescription = null, $IsPartOfInternalAnalysis = null, $IsPartOfResolution = null, $MemberId = null, $ContactId = null, $CreatedBy = null, $MemberFullName = null)
    {
        $this->Id                        = $Id;
        $this->CustomerUpdatedFlag       = $CustomerUpdatedFlag;
        $this->NoteText                  = $NoteText;
        $this->IsInternalNote            = $IsInternalNote;
        $this->IsExternalNote            = $IsExternalNote;
        $this->ProcessNotifications      = $ProcessNotifications;
        $this->IsPartOfDetailDescription = $IsPartOfDetailDescription;
        $this->IsPartOfInternalAnalysis  = $IsPartOfInternalAnalysis;
        $this->IsPartOfResolution        = $IsPartOfResolution;
        $this->MemberId                  = $MemberId;
        $this->ContactId                 = $ContactId;
        $this->CreatedBy                 = $CreatedBy;
        $this->MemberFullName            = $MemberFullName;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomerUpdatedFlag()
    {
        return $this->CustomerUpdatedFlag;
    }

    /**
     * @param boolean $CustomerUpdatedFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setCustomerUpdatedFlag($CustomerUpdatedFlag)
    {
        $this->CustomerUpdatedFlag = $CustomerUpdatedFlag;
        return $this;
    }

    /**
     * @return string
     */
    public function getNoteText()
    {
        return $this->NoteText;
    }

    /**
     * @param string $NoteText
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setNoteText($NoteText)
    {
        $this->NoteText = $NoteText;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInternalNote()
    {
        return $this->IsInternalNote;
    }

    /**
     * @param boolean $IsInternalNote
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setIsInternalNote($IsInternalNote)
    {
        $this->IsInternalNote = $IsInternalNote;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExternalNote()
    {
        return $this->IsExternalNote;
    }

    /**
     * @param boolean $IsExternalNote
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setIsExternalNote($IsExternalNote)
    {
        $this->IsExternalNote = $IsExternalNote;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getProcessNotifications()
    {
        return $this->ProcessNotifications;
    }

    /**
     * @param boolean $ProcessNotifications
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setProcessNotifications($ProcessNotifications)
    {
        $this->ProcessNotifications = $ProcessNotifications;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartOfDetailDescription()
    {
        return $this->IsPartOfDetailDescription;
    }

    /**
     * @param boolean $IsPartOfDetailDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setIsPartOfDetailDescription($IsPartOfDetailDescription)
    {
        $this->IsPartOfDetailDescription = $IsPartOfDetailDescription;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartOfInternalAnalysis()
    {
        return $this->IsPartOfInternalAnalysis;
    }

    /**
     * @param boolean $IsPartOfInternalAnalysis
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setIsPartOfInternalAnalysis($IsPartOfInternalAnalysis)
    {
        $this->IsPartOfInternalAnalysis = $IsPartOfInternalAnalysis;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPartOfResolution()
    {
        return $this->IsPartOfResolution;
    }

    /**
     * @param boolean $IsPartOfResolution
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setIsPartOfResolution($IsPartOfResolution)
    {
        $this->IsPartOfResolution = $IsPartOfResolution;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setMemberId($MemberId)
    {
        $this->MemberId = $MemberId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreated()
    {
        if ($this->DateCreated == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateCreated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateCreated
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setDateCreated(\DateTime $DateCreated)
    {
        $this->DateCreated = $DateCreated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }

    /**
     * @param string $CreatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setCreatedBy($CreatedBy)
    {
        $this->CreatedBy = $CreatedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemberFullName()
    {
        return $this->MemberFullName;
    }

    /**
     * @param string $MemberFullName
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setMemberFullName($MemberFullName)
    {
        $this->MemberFullName = $MemberFullName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreatedUtc()
    {
        if ($this->DateCreatedUtc == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->DateCreatedUtc);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $DateCreatedUtc
     * @return \Spinen\ConnectWise\Library\Api\Generated\TicketNote
     */
    public function setDateCreatedUtc(\DateTime $DateCreatedUtc)
    {
        $this->DateCreatedUtc = $DateCreatedUtc->format(\DateTime::ATOM);
        return $this;
    }

}
