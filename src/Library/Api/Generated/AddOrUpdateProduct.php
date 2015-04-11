<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProduct
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var Product $product
     */
    protected $product = null;

    /**
     * @param ApiCredentials $credentials
     * @param Product $product
     */
    public function __construct(ApiCredentials $credentials = null, Product $product = null)
    {
        $this->credentials = $credentials;
        $this->product     = $product;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProduct
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProduct
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
        return $this;
    }

}
