<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class CreatePurchaseOrderFromProductDemandsActionResponse
{

    /**
     * @var PurchaseOrder $CreatePurchaseOrderFromProductDemandsActionResult
     */
    protected $CreatePurchaseOrderFromProductDemandsActionResult = null;

    /**
     * @param PurchaseOrder $CreatePurchaseOrderFromProductDemandsActionResult
     */
    public function __construct(PurchaseOrder $CreatePurchaseOrderFromProductDemandsActionResult = null)
    {
        $this->CreatePurchaseOrderFromProductDemandsActionResult = $CreatePurchaseOrderFromProductDemandsActionResult;
    }

    /**
     * @return PurchaseOrder
     */
    public function getCreatePurchaseOrderFromProductDemandsActionResult()
    {
        return $this->CreatePurchaseOrderFromProductDemandsActionResult;
    }

    /**
     * @param PurchaseOrder $CreatePurchaseOrderFromProductDemandsActionResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\CreatePurchaseOrderFromProductDemandsActionResponse
     */
    public function setCreatePurchaseOrderFromProductDemandsActionResult(PurchaseOrder $CreatePurchaseOrderFromProductDemandsActionResult)
    {
        $this->CreatePurchaseOrderFromProductDemandsActionResult = $CreatePurchaseOrderFromProductDemandsActionResult;
        return $this;
    }

}
