<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateSpecialInvoiceProduct
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var SpecialInvoiceProduct $specialInvoiceProduct
     */
    protected $specialInvoiceProduct = null;

    /**
     * @param ApiCredentials $credentials
     * @param SpecialInvoiceProduct $specialInvoiceProduct
     */
    public function __construct(ApiCredentials $credentials = null, SpecialInvoiceProduct $specialInvoiceProduct = null)
    {
        $this->credentials           = $credentials;
        $this->specialInvoiceProduct = $specialInvoiceProduct;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateSpecialInvoiceProduct
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return SpecialInvoiceProduct
     */
    public function getSpecialInvoiceProduct()
    {
        return $this->specialInvoiceProduct;
    }

    /**
     * @param SpecialInvoiceProduct $specialInvoiceProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateSpecialInvoiceProduct
     */
    public function setSpecialInvoiceProduct(SpecialInvoiceProduct $specialInvoiceProduct)
    {
        $this->specialInvoiceProduct = $specialInvoiceProduct;
        return $this;
    }

}
