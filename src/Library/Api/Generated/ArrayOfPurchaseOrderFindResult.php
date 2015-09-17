<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPurchaseOrderFindResult
{

    /**
     * @var PurchaseOrderFindResult[] $PurchaseOrderFindResult
     */
    protected $PurchaseOrderFindResult = null;

    public function __construct()
    {

    }

    /**
     * @return PurchaseOrderFindResult[]
     */
    public function getPurchaseOrderFindResult()
    {
        return $this->PurchaseOrderFindResult;
    }

    /**
     * @param PurchaseOrderFindResult[] $PurchaseOrderFindResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPurchaseOrderFindResult
     */
    public function setPurchaseOrderFindResult(array $PurchaseOrderFindResult = null)
    {
        $this->PurchaseOrderFindResult = $PurchaseOrderFindResult;
        return $this;
    }

}
