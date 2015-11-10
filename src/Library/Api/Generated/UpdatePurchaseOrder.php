<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class UpdatePurchaseOrder
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var PurchaseOrderUpdateValues $updateValues
     */
    protected $updateValues = null;

    /**
     * @param ApiCredentials $credentials
     * @param PurchaseOrderUpdateValues $updateValues
     */
    public function __construct(ApiCredentials $credentials = null, PurchaseOrderUpdateValues $updateValues = null)
    {
        $this->credentials  = $credentials;
        $this->updateValues = $updateValues;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePurchaseOrder
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return PurchaseOrderUpdateValues
     */
    public function getUpdateValues()
    {
        return $this->updateValues;
    }

    /**
     * @param PurchaseOrderUpdateValues $updateValues
     * @return \Spinen\ConnectWise\Library\Api\Generated\UpdatePurchaseOrder
     */
    public function setUpdateValues(PurchaseOrderUpdateValues $updateValues)
    {
        $this->updateValues = $updateValues;
        return $this;
    }

}
