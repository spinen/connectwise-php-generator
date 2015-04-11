<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RecordEmailOpened
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $contactId
     */
    protected $contactId = null;

    /**
     * @var \DateTime $dateOpened
     */
    protected $dateOpened = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $campaignId
     * @param int $contactId
     * @param \DateTime $dateOpened
     */
    public function __construct(ApiCredentials $credentials = null, $campaignId = null, $contactId = null, \DateTime $dateOpened = null)
    {
        $this->credentials = $credentials;
        $this->campaignId  = $campaignId;
        $this->contactId   = $contactId;
        $this->dateOpened  = $dateOpened ? $dateOpened->format(\DateTime::ATOM) : null;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordEmailOpened
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordEmailOpened
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordEmailOpened
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOpened()
    {
        if ($this->dateOpened == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dateOpened);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dateOpened
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordEmailOpened
     */
    public function setDateOpened(\DateTime $dateOpened)
    {
        $this->dateOpened = $dateOpened->format(\DateTime::ATOM);
        return $this;
    }

}
