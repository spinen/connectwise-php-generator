<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class Note
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $NoteType
     */
    protected $NoteType = null;

    /**
     * @var string $NoteText
     */
    protected $NoteText = null;

    /**
     * @var boolean $IsFlagged
     */
    protected $IsFlagged = null;

    /**
     * @var string $EnteredBy
     */
    protected $EnteredBy = null;

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
     * @param string $NoteType
     * @param string $NoteText
     * @param boolean $IsFlagged
     * @param string $EnteredBy
     * @param string $UpdatedBy
     */
    public function __construct($Id = null, $NoteType = null, $NoteText = null, $IsFlagged = null, $EnteredBy = null, $UpdatedBy = null)
    {
        $this->Id        = $Id;
        $this->NoteType  = $NoteType;
        $this->NoteText  = $NoteText;
        $this->IsFlagged = $IsFlagged;
        $this->EnteredBy = $EnteredBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNoteType()
    {
        return $this->NoteType;
    }

    /**
     * @param string $NoteType
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
     */
    public function setNoteType($NoteType)
    {
        $this->NoteType = $NoteType;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
     */
    public function setNoteText($NoteText)
    {
        $this->NoteText = $NoteText;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFlagged()
    {
        return $this->IsFlagged;
    }

    /**
     * @param boolean $IsFlagged
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
     */
    public function setIsFlagged($IsFlagged)
    {
        $this->IsFlagged = $IsFlagged;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnteredBy()
    {
        return $this->EnteredBy;
    }

    /**
     * @param string $EnteredBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
     */
    public function setEnteredBy($EnteredBy)
    {
        $this->EnteredBy = $EnteredBy;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\Note
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

}
