<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddPurchaseOrderResponse
{

    /**
     * @var PurchaseOrder $AddPurchaseOrderResult
     */
    protected $AddPurchaseOrderResult = null;

    /**
     * @param PurchaseOrder $AddPurchaseOrderResult
     */
    public function __construct(PurchaseOrder $AddPurchaseOrderResult = null)
    {
        $this->AddPurchaseOrderResult = $AddPurchaseOrderResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getAddPurchaseOrderResult()
    {
        return $this->AddPurchaseOrderResult;
    }

    /**
     * @param PurchaseOrder $AddPurchaseOrderResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddPurchaseOrderResponse
     */
    public function setAddPurchaseOrderResult(PurchaseOrder $AddPurchaseOrderResult)
    {
        $this->AddPurchaseOrderResult = $AddPurchaseOrderResult;
        return $this;
    }

}
