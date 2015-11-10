<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectNote
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProjectNote $projectNote
     */
    protected $projectNote = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProjectNote $projectNote
     */
    public function __construct(ApiCredentials $credentials = null, ProjectNote $projectNote = null)
    {
        $this->credentials = $credentials;
        $this->projectNote = $projectNote;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectNote
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProjectNote
     */
    public function getProjectNote()
    {
        return $this->projectNote;
    }

    /**
     * @param ProjectNote $projectNote
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectNote
     */
    public function setProjectNote(ProjectNote $projectNote)
    {
        $this->projectNote = $projectNote;
        return $this;
    }

}
