<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectNoteResponse
{

    /**
     * @var ProjectNote $GetProjectNoteResult
     */
    protected $GetProjectNoteResult = null;

    /**
     * @param ProjectNote $GetProjectNoteResult
     */
    public function __construct(ProjectNote $GetProjectNoteResult = null)
    {
        $this->GetProjectNoteResult = $GetProjectNoteResult;
    }

    /**
     * @return ProjectNote
     */
    public function getGetProjectNoteResult()
    {
        return $this->GetProjectNoteResult;
    }

    /**
     * @param ProjectNote $GetProjectNoteResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectNoteResponse
     */
    public function setGetProjectNoteResult(ProjectNote $GetProjectNoteResult)
    {
        $this->GetProjectNoteResult = $GetProjectNoteResult;
        return $this;
    }

}
