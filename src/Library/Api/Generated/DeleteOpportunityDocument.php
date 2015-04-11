<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteOpportunityDocument
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
     * @var int $opportunityId
     */
    protected $opportunityId = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $id
     * @param int $opportunityId
     */
    public function __construct(ApiCredentials $credentials = null, $id = null, $opportunityId = null)
    {
        $this->credentials   = $credentials;
        $this->id            = $id;
        $this->opportunityId = $opportunityId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteOpportunityDocument
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteOpportunityDocument
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * @param int $opportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteOpportunityDocument
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }

}
