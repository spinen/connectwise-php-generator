<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectNote
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
     * @var string $Notes
     */
    protected $Notes = null;

    /**
     * @var int $NoteTypeId
     */
    protected $NoteTypeId = null;

    /**
     * @var boolean $Flag
     */
    protected $Flag = null;

    /**
     * @param int $Id
     * @param int $ProjectId
     * @param int $NoteTypeId
     * @param boolean $Flag
     */
    public function __construct($Id = null, $ProjectId = null, $NoteTypeId = null, $Flag = null)
    {
        $this->Id         = $Id;
        $this->ProjectId  = $ProjectId;
        $this->NoteTypeId = $NoteTypeId;
        $this->Flag       = $Flag;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNote
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNote
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNote
     */
    public function setNotes($Notes)
    {
        $this->Notes = $Notes;
        return $this;
    }

    /**
     * @return int
     */
    public function getNoteTypeId()
    {
        return $this->NoteTypeId;
    }

    /**
     * @param int $NoteTypeId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNote
     */
    public function setNoteTypeId($NoteTypeId)
    {
        $this->NoteTypeId = $NoteTypeId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getFlag()
    {
        return $this->Flag;
    }

    /**
     * @param boolean $Flag
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNote
     */
    public function setFlag($Flag)
    {
        $this->Flag = $Flag;
        return $this;
    }

}
