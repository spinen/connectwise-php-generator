<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RecordLinkClicked
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
     * @var string $url
     */
    protected $url = null;

    /**
     * @var \DateTime $dateClicked
     */
    protected $dateClicked = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $campaignId
     * @param int $contactId
     * @param string $url
     * @param \DateTime $dateClicked
     */
    public function __construct(ApiCredentials $credentials = null, $campaignId = null, $contactId = null, $url = null, \DateTime $dateClicked = null)
    {
        $this->credentials = $credentials;
        $this->campaignId  = $campaignId;
        $this->contactId   = $contactId;
        $this->url         = $url;
        $this->dateClicked = $dateClicked ? $dateClicked->format(\DateTime::ATOM) : null;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordLinkClicked
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordLinkClicked
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordLinkClicked
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordLinkClicked
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateClicked()
    {
        if ($this->dateClicked == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dateClicked);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dateClicked
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordLinkClicked
     */
    public function setDateClicked(\DateTime $dateClicked)
    {
        $this->dateClicked = $dateClicked->format(\DateTime::ATOM);
        return $this;
    }

}
