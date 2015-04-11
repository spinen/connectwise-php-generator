<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdatePurchaseOrderResponse
{

    /**
     * @var PurchaseOrder $UpdatePurchaseOrderResult
     */
    protected $UpdatePurchaseOrderResult = null;

    /**
     * @param PurchaseOrder $UpdatePurchaseOrderResult
     */
    public function __construct(PurchaseOrder $UpdatePurchaseOrderResult = null)
    {
        $this->UpdatePurchaseOrderResult = $UpdatePurchaseOrderResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getUpdatePurchaseOrderResult()
    {
        return $this->UpdatePurchaseOrderResult;
    }

    /**
     * @param PurchaseOrder $UpdatePurchaseOrderResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePurchaseOrderResponse
     */
    public function setUpdatePurchaseOrderResult(PurchaseOrder $UpdatePurchaseOrderResult)
    {
        $this->UpdatePurchaseOrderResult = $UpdatePurchaseOrderResult;
        return $this;
    }

}
