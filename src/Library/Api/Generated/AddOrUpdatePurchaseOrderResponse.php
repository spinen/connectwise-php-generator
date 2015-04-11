<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePurchaseOrderResponse
{

    /**
     * @var PurchaseOrder $AddOrUpdatePurchaseOrderResult
     */
    protected $AddOrUpdatePurchaseOrderResult = null;

    /**
     * @param PurchaseOrder $AddOrUpdatePurchaseOrderResult
     */
    public function __construct(PurchaseOrder $AddOrUpdatePurchaseOrderResult = null)
    {
        $this->AddOrUpdatePurchaseOrderResult = $AddOrUpdatePurchaseOrderResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getAddOrUpdatePurchaseOrderResult()
    {
        return $this->AddOrUpdatePurchaseOrderResult;
    }

    /**
     * @param PurchaseOrder $AddOrUpdatePurchaseOrderResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePurchaseOrderResponse
     */
    public function setAddOrUpdatePurchaseOrderResult(PurchaseOrder $AddOrUpdatePurchaseOrderResult)
    {
        $this->AddOrUpdatePurchaseOrderResult = $AddOrUpdatePurchaseOrderResult;
        return $this;
    }

}
