<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteProjectProduct
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
     * @var int $projectId
     */
    protected $projectId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     * @param int $projectId
     */
    public function __construct(ApiCredentials $credentials = null, $id = null, $projectId = null)
    {
        $this->credentials = $credentials;
        $this->id          = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteProjectProduct
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteProjectProduct
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteProjectProduct
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
        return $this;
    }

}
