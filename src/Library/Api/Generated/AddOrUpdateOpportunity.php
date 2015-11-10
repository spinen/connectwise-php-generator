<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateOpportunity
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Opportunity $opportunity
     */
    protected $opportunity = null;

    /**
     * @param ApiCredentials $credentials
     * @param Opportunity $opportunity
     */
    public function __construct(ApiCredentials $credentials = null, Opportunity $opportunity = null)
    {
        $this->credentials = $credentials;
        $this->opportunity = $opportunity;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateOpportunity
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Opportunity
     */
    public function getOpportunity()
    {
        return $this->opportunity;
    }

    /**
     * @param Opportunity $opportunity
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateOpportunity
     */
    public function setOpportunity(Opportunity $opportunity)
    {
        $this->opportunity = $opportunity;
        return $this;
    }

}
