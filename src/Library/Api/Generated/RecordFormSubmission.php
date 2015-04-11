<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RecordFormSubmission
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
     * @var string $pageType
     */
    protected $pageType = null;

    /**
     * @var string $pageSubType
     */
    protected $pageSubType = null;

    /**
     * @var string $topic
     */
    protected $topic = null;

    /**
     * @var string $version
     */
    protected $version = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $dateSubmitted
     */
    protected $dateSubmitted = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $campaignId
     * @param int $contactId
     * @param string $url
     * @param string $pageType
     * @param string $pageSubType
     * @param string $topic
     * @param string $version
     * @param string $status
     * @param \DateTime $dateSubmitted
     */
    public function __construct(ApiCredentials $credentials = null, $campaignId = null, $contactId = null, $url = null, $pageType = null, $pageSubType = null, $topic = null, $version = null, $status = null, \DateTime $dateSubmitted = null)
    {
        $this->credentials   = $credentials;
        $this->campaignId    = $campaignId;
        $this->contactId     = $contactId;
        $this->url           = $url;
        $this->pageType      = $pageType;
        $this->pageSubType   = $pageSubType;
        $this->topic         = $topic;
        $this->version       = $version;
        $this->status        = $status;
        $this->dateSubmitted = $dateSubmitted ? $dateSubmitted->format(\DateTime::ATOM) : null;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageType()
    {
        return $this->pageType;
    }

    /**
     * @param string $pageType
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setPageType($pageType)
    {
        $this->pageType = $pageType;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageSubType()
    {
        return $this->pageSubType;
    }

    /**
     * @param string $pageSubType
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setPageSubType($pageSubType)
    {
        $this->pageSubType = $pageSubType;
        return $this;
    }

    /**
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateSubmitted()
    {
        if ($this->dateSubmitted == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->dateSubmitted);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $dateSubmitted
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordFormSubmission
     */
    public function setDateSubmitted(\DateTime $dateSubmitted)
    {
        $this->dateSubmitted = $dateSubmitted->format(\DateTime::ATOM);
        return $this;
    }

}
