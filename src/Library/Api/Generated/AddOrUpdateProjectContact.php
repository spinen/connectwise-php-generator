<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectContact
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProjectContact $projectContact
     */
    protected $projectContact = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProjectContact $projectContact
     */
    public function __construct(ApiCredentials $credentials = null, ProjectContact $projectContact = null)
    {
        $this->credentials    = $credentials;
        $this->projectContact = $projectContact;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectContact
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProjectContact
     */
    public function getProjectContact()
    {
        return $this->projectContact;
    }

    /**
     * @param ProjectContact $projectContact
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectContact
     */
    public function setProjectContact(ProjectContact $projectContact)
    {
        $this->projectContact = $projectContact;
        return $this;
    }

}
