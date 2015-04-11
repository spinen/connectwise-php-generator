<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class LoadPurchaseOrderResponse
{

    /**
     * @var PurchaseOrder $LoadPurchaseOrderResult
     */
    protected $LoadPurchaseOrderResult = null;

    /**
     * @param PurchaseOrder $LoadPurchaseOrderResult
     */
    public function __construct(PurchaseOrder $LoadPurchaseOrderResult = null)
    {
        $this->LoadPurchaseOrderResult = $LoadPurchaseOrderResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getLoadPurchaseOrderResult()
    {
        return $this->LoadPurchaseOrderResult;
    }

    /**
     * @param PurchaseOrder $LoadPurchaseOrderResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\LoadPurchaseOrderResponse
     */
    public function setLoadPurchaseOrderResult(PurchaseOrder $LoadPurchaseOrderResult)
    {
        $this->LoadPurchaseOrderResult = $LoadPurchaseOrderResult;
        return $this;
    }

}
