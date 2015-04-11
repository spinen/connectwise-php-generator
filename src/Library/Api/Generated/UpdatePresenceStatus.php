<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdatePresenceStatus
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
     * @var int $presenceStatusValue
     */
    protected $presenceStatusValue = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactId
     * @param int $presenceStatusValue
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null, $presenceStatusValue = null)
    {
        $this->credentials         = $credentials;
        $this->contactId           = $contactId;
        $this->presenceStatusValue = $presenceStatusValue;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePresenceStatus
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePresenceStatus
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPresenceStatusValue()
    {
        return $this->presenceStatusValue;
    }

    /**
     * @param int $presenceStatusValue
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePresenceStatus
     */
    public function setPresenceStatusValue($presenceStatusValue)
    {
        $this->presenceStatusValue = $presenceStatusValue;
        return $this;
    }

}
