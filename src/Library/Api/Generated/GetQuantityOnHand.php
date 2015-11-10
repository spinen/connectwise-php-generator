<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class GetQuantityOnHand
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProductQuantityOnHand $productQuantityOnHand
     */
    protected $productQuantityOnHand = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProductQuantityOnHand $productQuantityOnHand
     */
    public function __construct(ApiCredentials $credentials = null, ProductQuantityOnHand $productQuantityOnHand = null)
    {
        $this->credentials           = $credentials;
        $this->productQuantityOnHand = $productQuantityOnHand;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetQuantityOnHand
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProductQuantityOnHand
     */
    public function getProductQuantityOnHand()
    {
        return $this->productQuantityOnHand;
    }

    /**
     * @param ProductQuantityOnHand $productQuantityOnHand
     * @return \Spinen\ConnectWise\Library\Api\Generated\GetQuantityOnHand
     */
    public function setProductQuantityOnHand(ProductQuantityOnHand $productQuantityOnHand)
    {
        $this->productQuantityOnHand = $productQuantityOnHand;
        return $this;
    }

}
