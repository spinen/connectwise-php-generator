<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteProjectContact
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $contactId
     */
    protected $contactId = null;

    /**
     * @var int $projectId
     */
    protected $projectId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactId
     * @param int $projectId
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null, $projectId = null)
    {
        $this->credentials = $credentials;
        $this->contactId   = $contactId;
        $this->projectId   = $projectId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteProjectContact
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * @param int $contactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteProjectContact
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteProjectContact
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

}
