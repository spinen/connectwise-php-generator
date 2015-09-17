<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfPurchaseOrderLineItem
{

    /**
     * @var PurchaseOrderLineItem[] $PurchaseOrderLineItem
     */
    protected $PurchaseOrderLineItem = null;

    public function __construct()
    {

    }

    /**
     * @return PurchaseOrderLineItem[]
     */
    public function getPurchaseOrderLineItem()
    {
        return $this->PurchaseOrderLineItem;
    }

    /**
     * @param PurchaseOrderLineItem[] $PurchaseOrderLineItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfPurchaseOrderLineItem
     */
    public function setPurchaseOrderLineItem(array $PurchaseOrderLineItem = null)
    {
        $this->PurchaseOrderLineItem = $PurchaseOrderLineItem;
        return $this;
    }

}
