<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ProjectNoteFindResult
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
     * @param string $Notes
     */
    public function __construct($Id = null, $Notes = null)
    {
        $this->Id    = $Id;
        $this->Notes = $Notes;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNoteFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNoteFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNoteFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNoteFindResult
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ProjectNoteFindResult
     */
    public function setFlag($Flag)
    {
        $this->Flag = $Flag;
        return $this;
    }

}
