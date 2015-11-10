<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOpportunityItem
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var OpportunityItem $item
     */
    protected $item = null;

    /**
     * @var boolean $bypassForecastUpdate
     */
    protected $bypassForecastUpdate = null;

    /**
     * @param ApiCredentials $credentials
     * @param OpportunityItem $item
     * @param boolean $bypassForecastUpdate
     */
    public function __construct(ApiCredentials $credentials = null, OpportunityItem $item = null, $bypassForecastUpdate = null)
    {
        $this->credentials          = $credentials;
        $this->item                 = $item;
        $this->bypassForecastUpdate = $bypassForecastUpdate;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityItem
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return OpportunityItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param OpportunityItem $item
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityItem
     */
    public function setItem(OpportunityItem $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getBypassForecastUpdate()
    {
        return $this->bypassForecastUpdate;
    }

    /**
     * @param boolean $bypassForecastUpdate
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOpportunityItem
     */
    public function setBypassForecastUpdate($bypassForecastUpdate)
    {
        $this->bypassForecastUpdate = $bypassForecastUpdate;
        return $this;
    }

}
