<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityToTicketConversionResponse
{

    /**
     * @var OpportunityToTicketConversion $OpportunityToTicketConversionResult
     */
    protected $OpportunityToTicketConversionResult = null;

    /**
     * @param OpportunityToTicketConversion $OpportunityToTicketConversionResult
     */
    public function __construct(OpportunityToTicketConversion $OpportunityToTicketConversionResult = null)
    {
        $this->OpportunityToTicketConversionResult = $OpportunityToTicketConversionResult;
    }

    /**
     * @return OpportunityToTicketConversion
     */
    public function getOpportunityToTicketConversionResult()
    {
        return $this->OpportunityToTicketConversionResult;
    }

    /**
     * @param OpportunityToTicketConversion $OpportunityToTicketConversionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToTicketConversionResponse
     */
    public function setOpportunityToTicketConversionResult(OpportunityToTicketConversion $OpportunityToTicketConversionResult)
    {
        $this->OpportunityToTicketConversionResult = $OpportunityToTicketConversionResult;
        return $this;
    }

}
