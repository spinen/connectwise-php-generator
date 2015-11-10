<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateProductPickedandShipped
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var ProductDetail $productDetail
     */
    protected $productDetail = null;

    /**
     * @param ApiCredentials $credentials
     * @param ProductDetail $productDetail
     */
    public function __construct(ApiCredentials $credentials = null, ProductDetail $productDetail = null)
    {
        $this->credentials   = $credentials;
        $this->productDetail = $productDetail;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProductPickedandShipped
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return ProductDetail
     */
    public function getProductDetail()
    {
        return $this->productDetail;
    }

    /**
     * @param ProductDetail $productDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateProductPickedandShipped
     */
    public function setProductDetail(ProductDetail $productDetail)
    {
        $this->productDetail = $productDetail;
        return $this;
    }

}
