<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetPurchaseOrderResponse
{

    /**
     * @var PurchaseOrder $GetPurchaseOrderResult
     */
    protected $GetPurchaseOrderResult = null;

    /**
     * @param PurchaseOrder $GetPurchaseOrderResult
     */
    public function __construct(PurchaseOrder $GetPurchaseOrderResult = null)
    {
        $this->GetPurchaseOrderResult = $GetPurchaseOrderResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getGetPurchaseOrderResult()
    {
        return $this->GetPurchaseOrderResult;
    }

    /**
     * @param PurchaseOrder $GetPurchaseOrderResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetPurchaseOrderResponse
     */
    public function setGetPurchaseOrderResult(PurchaseOrder $GetPurchaseOrderResult)
    {
        $this->GetPurchaseOrderResult = $GetPurchaseOrderResult;
        return $this;
    }

}
