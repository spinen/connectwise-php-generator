<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectNoteResponse
{

    /**
     * @var ProjectNote $AddOrUpdateProjectNoteResult
     */
    protected $AddOrUpdateProjectNoteResult = null;

    /**
     * @param ProjectNote $AddOrUpdateProjectNoteResult
     */
    public function __construct(ProjectNote $AddOrUpdateProjectNoteResult = null)
    {
        $this->AddOrUpdateProjectNoteResult = $AddOrUpdateProjectNoteResult;
    }

    /**
     * @return ProjectNote
     */
    public function getAddOrUpdateProjectNoteResult()
    {
        return $this->AddOrUpdateProjectNoteResult;
    }

    /**
     * @param ProjectNote $AddOrUpdateProjectNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectNoteResponse
     */
    public function setAddOrUpdateProjectNoteResult(ProjectNote $AddOrUpdateProjectNoteResult)
    {
        $this->AddOrUpdateProjectNoteResult = $AddOrUpdateProjectNoteResult;
        return $this;
    }

}
