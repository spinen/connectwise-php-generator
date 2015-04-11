<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OpportunityToSalesOrderConversion
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var OpportunityToSalesOrderConversion $opportunityToSalesOrder
     */
    protected $opportunityToSalesOrder = null;

    /**
     * @param ApiCredentials $credentials
     * @param OpportunityToSalesOrderConversion $opportunityToSalesOrder
     */
    public function __construct(ApiCredentials $credentials = null, OpportunityToSalesOrderConversion $opportunityToSalesOrder = null)
    {
        $this->credentials             = $credentials;
        $this->opportunityToSalesOrder = $opportunityToSalesOrder;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToSalesOrderConversion
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return OpportunityToSalesOrderConversion
     */
    public function getOpportunityToSalesOrder()
    {
        return $this->opportunityToSalesOrder;
    }

    /**
     * @param OpportunityToSalesOrderConversion $opportunityToSalesOrder
     * @return \Spinen\ConnectWise\Library\Api\Generated\OpportunityToSalesOrderConversion
     */
    public function setOpportunityToSalesOrder(OpportunityToSalesOrderConversion $opportunityToSalesOrder)
    {
        $this->opportunityToSalesOrder = $opportunityToSalesOrder;
        return $this;
    }

}
