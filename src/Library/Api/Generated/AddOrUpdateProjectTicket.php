<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProjectTicket
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProjectTicket $projectTicket
     */
    protected $projectTicket = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProjectTicket $projectTicket
     */
    public function __construct(ApiCredentials $credentials = null, ProjectTicket $projectTicket = null)
    {
        $this->credentials   = $credentials;
        $this->projectTicket = $projectTicket;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectTicket
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProjectTicket
     */
    public function getProjectTicket()
    {
        return $this->projectTicket;
    }

    /**
     * @param ProjectTicket $projectTicket
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProjectTicket
     */
    public function setProjectTicket(ProjectTicket $projectTicket)
    {
        $this->projectTicket = $projectTicket;
        return $this;
    }

}
