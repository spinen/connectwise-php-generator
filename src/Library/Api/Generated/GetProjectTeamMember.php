<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetProjectTeamMember
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     */
    public function __construct(ApiCredentials $credentials = null, $id = null)
    {
        $this->credentials = $credentials;
        $this->id          = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectTeamMember
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetProjectTeamMember
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

}
