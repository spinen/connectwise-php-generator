<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddPurchaseOrderLineItemResponse
{

    /**
     * @var PurchaseOrderLineItem $AddPurchaseOrderLineItemResult
     */
    protected $AddPurchaseOrderLineItemResult = null;

    /**
     * @param PurchaseOrderLineItem $AddPurchaseOrderLineItemResult
     */
    public function __construct(PurchaseOrderLineItem $AddPurchaseOrderLineItemResult = null)
    {
        $this->AddPurchaseOrderLineItemResult = $AddPurchaseOrderLineItemResult;
    }

    /**
     * @return PurchaseOrderLineItem
     */
    public function getAddPurchaseOrderLineItemResult()
    {
        return $this->AddPurchaseOrderLineItemResult;
    }

    /**
     * @param PurchaseOrderLineItem $AddPurchaseOrderLineItemResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddPurchaseOrderLineItemResponse
     */
    public function setAddPurchaseOrderLineItemResult(PurchaseOrderLineItem $AddPurchaseOrderLineItemResult)
    {
        $this->AddPurchaseOrderLineItemResult = $AddPurchaseOrderLineItemResult;
        return $this;
    }

}
