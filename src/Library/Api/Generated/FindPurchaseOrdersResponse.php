<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class FindPurchaseOrdersResponse
{

    /**
     * @var ArrayOfPurchaseOrderFindResult $FindPurchaseOrdersResult
     */
    protected $FindPurchaseOrdersResult = null;

    /**
     * @param ArrayOfPurchaseOrderFindResult $FindPurchaseOrdersResult
     */
    public function __construct($FindPurchaseOrdersResult = null)
    {
        $this->FindPurchaseOrdersResult = $FindPurchaseOrdersResult;
    }

    /**
     * @return ArrayOfPurchaseOrderFindResult
     */
    public function getFindPurchaseOrdersResult()
    {
        return $this->FindPurchaseOrdersResult;
    }

    /**
     * @param ArrayOfPurchaseOrderFindResult $FindPurchaseOrdersResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\FindPurchaseOrdersResponse
     */
    public function setFindPurchaseOrdersResult($FindPurchaseOrdersResult)
    {
        $this->FindPurchaseOrdersResult = $FindPurchaseOrdersResult;
        return $this;
    }

}
