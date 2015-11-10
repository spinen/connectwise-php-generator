<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdatePurchaseOrderLineItem
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $purchaseOrderId
     */
    protected $purchaseOrderId = null;

    /**
     * @var PurchaseOrderLineItem $lineItem
     */
    protected $lineItem = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $purchaseOrderId
     * @param PurchaseOrderLineItem $lineItem
     */
    public function __construct(ApiCredentials $credentials = null, $purchaseOrderId = null, PurchaseOrderLineItem $lineItem = null)
    {
        $this->credentials     = $credentials;
        $this->purchaseOrderId = $purchaseOrderId;
        $this->lineItem        = $lineItem;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePurchaseOrderLineItem
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderId()
    {
        return $this->purchaseOrderId;
    }

    /**
     * @param int $purchaseOrderId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePurchaseOrderLineItem
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        $this->purchaseOrderId = $purchaseOrderId;
        return $this;
    }

    /**
     * @return PurchaseOrderLineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * @param PurchaseOrderLineItem $lineItem
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdatePurchaseOrderLineItem
     */
    public function setLineItem(PurchaseOrderLineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

}
