<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityToSalesOrderConversionResponse
{

    /**
     * @var OpportunityToSalesOrderConversion $OpportunityToSalesOrderConversionResult
     */
    protected $OpportunityToSalesOrderConversionResult = null;

    /**
     * @param OpportunityToSalesOrderConversion $OpportunityToSalesOrderConversionResult
     */
    public function __construct(OpportunityToSalesOrderConversion $OpportunityToSalesOrderConversionResult = null)
    {
        $this->OpportunityToSalesOrderConversionResult = $OpportunityToSalesOrderConversionResult;
    }

    /**
     * @return OpportunityToSalesOrderConversion
     */
    public function getOpportunityToSalesOrderConversionResult()
    {
        return $this->OpportunityToSalesOrderConversionResult;
    }

    /**
     * @param OpportunityToSalesOrderConversion $OpportunityToSalesOrderConversionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToSalesOrderConversionResponse
     */
    public function setOpportunityToSalesOrderConversionResult(OpportunityToSalesOrderConversion $OpportunityToSalesOrderConversionResult)
    {
        $this->OpportunityToSalesOrderConversionResult = $OpportunityToSalesOrderConversionResult;
        return $this;
    }

}
