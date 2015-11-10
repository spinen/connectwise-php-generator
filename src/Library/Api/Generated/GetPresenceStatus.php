<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPresenceStatus
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
     * @param ApiCredentials $credentials
     * @param int $contactId
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null)
    {
        $this->credentials = $credentials;
        $this->contactId   = $contactId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPresenceStatus
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPresenceStatus
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

}
