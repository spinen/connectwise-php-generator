<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteCompanyTeam
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $teamId
     */
    protected $teamId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $teamId
     */
    public function __construct(ApiCredentials $credentials = null, $teamId = null)
    {
        $this->credentials = $credentials;
        $this->teamId      = $teamId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteCompanyTeam
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @param int $teamId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteCompanyTeam
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
        return $this;
    }

}
