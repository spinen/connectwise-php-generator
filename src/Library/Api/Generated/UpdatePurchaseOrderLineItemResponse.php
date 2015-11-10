<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdatePurchaseOrderLineItemResponse
{

    /**
     * @var PurchaseOrderLineItem $UpdatePurchaseOrderLineItemResult
     */
    protected $UpdatePurchaseOrderLineItemResult = null;

    /**
     * @param PurchaseOrderLineItem $UpdatePurchaseOrderLineItemResult
     */
    public function __construct(PurchaseOrderLineItem $UpdatePurchaseOrderLineItemResult = null)
    {
        $this->UpdatePurchaseOrderLineItemResult = $UpdatePurchaseOrderLineItemResult;
    }

    /**
     * @return PurchaseOrderLineItem
     */
    public function getUpdatePurchaseOrderLineItemResult()
    {
        return $this->UpdatePurchaseOrderLineItemResult;
    }

    /**
     * @param PurchaseOrderLineItem $UpdatePurchaseOrderLineItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePurchaseOrderLineItemResponse
     */
    public function setUpdatePurchaseOrderLineItemResult(PurchaseOrderLineItem $UpdatePurchaseOrderLineItemResult)
    {
        $this->UpdatePurchaseOrderLineItemResult = $UpdatePurchaseOrderLineItemResult;
        return $this;
    }

}
