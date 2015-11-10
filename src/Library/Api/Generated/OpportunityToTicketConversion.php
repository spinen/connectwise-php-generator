<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityToTicketConversion
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var OpportunityToTicketConversion $opportunityToTicket
     */
    protected $opportunityToTicket = null;

    /**
     * @param ApiCredentials $credentials
     * @param OpportunityToTicketConversion $opportunityToTicket
     */
    public function __construct(ApiCredentials $credentials = null, OpportunityToTicketConversion $opportunityToTicket = null)
    {
        $this->credentials         = $credentials;
        $this->opportunityToTicket = $opportunityToTicket;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToTicketConversion
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return OpportunityToTicketConversion
     */
    public function getOpportunityToTicket()
    {
        return $this->opportunityToTicket;
    }

    /**
     * @param OpportunityToTicketConversion $opportunityToTicket
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToTicketConversion
     */
    public function setOpportunityToTicket(OpportunityToTicketConversion $opportunityToTicket)
    {
        $this->opportunityToTicket = $opportunityToTicket;
        return $this;
    }

}
