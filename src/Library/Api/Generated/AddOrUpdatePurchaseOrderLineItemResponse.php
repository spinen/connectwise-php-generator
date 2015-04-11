<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePurchaseOrderLineItemResponse
{

    /**
     * @var PurchaseOrderLineItem $AddOrUpdatePurchaseOrderLineItemResult
     */
    protected $AddOrUpdatePurchaseOrderLineItemResult = null;

    /**
     * @param PurchaseOrderLineItem $AddOrUpdatePurchaseOrderLineItemResult
     */
    public function __construct(PurchaseOrderLineItem $AddOrUpdatePurchaseOrderLineItemResult = null)
    {
        $this->AddOrUpdatePurchaseOrderLineItemResult = $AddOrUpdatePurchaseOrderLineItemResult;
    }

    /**
     * @return PurchaseOrderLineItem
     */
    public function getAddOrUpdatePurchaseOrderLineItemResult()
    {
        return $this->AddOrUpdatePurchaseOrderLineItemResult;
    }

    /**
     * @param PurchaseOrderLineItem $AddOrUpdatePurchaseOrderLineItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePurchaseOrderLineItemResponse
     */
    public function setAddOrUpdatePurchaseOrderLineItemResult(PurchaseOrderLineItem $AddOrUpdatePurchaseOrderLineItemResult)
    {
        $this->AddOrUpdatePurchaseOrderLineItemResult = $AddOrUpdatePurchaseOrderLineItemResult;
        return $this;
    }

}
