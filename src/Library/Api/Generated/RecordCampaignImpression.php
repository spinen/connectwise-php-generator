<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class RecordCampaignImpression
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
     * @param ApiCredentials $credentials
     * @param int $campaignId
     */
    public function __construct(ApiCredentials $credentials = null, $campaignId = null)
    {
        $this->credentials = $credentials;
        $this->campaignId  = $campaignId;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordCampaignImpression
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\RecordCampaignImpression
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

}
