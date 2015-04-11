<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityToProjectConversionResponse
{

    /**
     * @var OpportunityToProjectConversion $OpportunityToProjectConversionResult
     */
    protected $OpportunityToProjectConversionResult = null;

    /**
     * @param OpportunityToProjectConversion $OpportunityToProjectConversionResult
     */
    public function __construct(OpportunityToProjectConversion $OpportunityToProjectConversionResult = null)
    {
        $this->OpportunityToProjectConversionResult = $OpportunityToProjectConversionResult;
    }

    /**
     * @return OpportunityToProjectConversion
     */
    public function getOpportunityToProjectConversionResult()
    {
        return $this->OpportunityToProjectConversionResult;
    }

    /**
     * @param OpportunityToProjectConversion $OpportunityToProjectConversionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToProjectConversionResponse
     */
    public function setOpportunityToProjectConversionResult(OpportunityToProjectConversion $OpportunityToProjectConversionResult)
    {
        $this->OpportunityToProjectConversionResult = $OpportunityToProjectConversionResult;
        return $this;
    }

}
