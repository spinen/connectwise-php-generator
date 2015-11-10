<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DeleteContactCommunicationItem
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
     * @var CommunicationType $communicationType
     */
    protected $communicationType = null;

    /**
     * @var string $communicationDescription
     */
    protected $communicationDescription = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $contactId
     * @param CommunicationType $communicationType
     * @param string $communicationDescription
     */
    public function __construct(ApiCredentials $credentials = null, $contactId = null, CommunicationType $communicationType = null, $communicationDescription = null)
    {
        $this->credentials              = $credentials;
        $this->contactId                = $contactId;
        $this->communicationType        = $communicationType;
        $this->communicationDescription = $communicationDescription;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteContactCommunicationItem
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteContactCommunicationItem
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return CommunicationType
     */
    public function getCommunicationType()
    {
        return $this->communicationType;
    }

    /**
     * @param CommunicationType $communicationType
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteContactCommunicationItem
     */
    public function setCommunicationType(CommunicationType $communicationType)
    {
        $this->communicationType = $communicationType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCommunicationDescription()
    {
        return $this->communicationDescription;
    }

    /**
     * @param string $communicationDescription
     * @return \Spinen\ConnectWise\Library\Api\Generated\DeleteContactCommunicationItem
     */
    public function setCommunicationDescription($communicationDescription)
    {
        $this->communicationDescription = $communicationDescription;
        return $this;
    }

}
