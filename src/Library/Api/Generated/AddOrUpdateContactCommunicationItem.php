<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateContactCommunicationItem
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
     * @var ContactCommunicationItem $communicationItem
     */
    protected $communicationItem = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactId
     * @param ContactCommunicationItem $communicationItem
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null, ContactCommunicationItem $communicationItem = null)
    {
        $this->credentials       = $credentials;
        $this->contactId         = $contactId;
        $this->communicationItem = $communicationItem;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactCommunicationItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactCommunicationItem
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return ContactCommunicationItem
     */
    public function getCommunicationItem()
    {
        return $this->communicationItem;
    }

    /**
     * @param ContactCommunicationItem $communicationItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateContactCommunicationItem
     */
    public function setCommunicationItem(ContactCommunicationItem $communicationItem)
    {
        $this->communicationItem = $communicationItem;
        return $this;
    }

}
