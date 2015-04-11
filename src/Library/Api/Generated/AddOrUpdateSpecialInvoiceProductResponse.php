<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddOrUpdateSpecialInvoiceProductResponse
{

    /**
     * @var SpecialInvoiceProduct $AddOrUpdateSpecialInvoiceProductResult
     */
    protected $AddOrUpdateSpecialInvoiceProductResult = null;

    /**
     * @param SpecialInvoiceProduct $AddOrUpdateSpecialInvoiceProductResult
     */
    public function __construct(SpecialInvoiceProduct $AddOrUpdateSpecialInvoiceProductResult = null)
    {
        $this->AddOrUpdateSpecialInvoiceProductResult = $AddOrUpdateSpecialInvoiceProductResult;
    }

    /**
     * @return SpecialInvoiceProduct
     */
    public function getAddOrUpdateSpecialInvoiceProductResult()
    {
        return $this->AddOrUpdateSpecialInvoiceProductResult;
    }

    /**
     * @param SpecialInvoiceProduct $AddOrUpdateSpecialInvoiceProductResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddOrUpdateSpecialInvoiceProductResponse
     */
    public function setAddOrUpdateSpecialInvoiceProductResult(SpecialInvoiceProduct $AddOrUpdateSpecialInvoiceProductResult)
    {
        $this->AddOrUpdateSpecialInvoiceProductResult = $AddOrUpdateSpecialInvoiceProductResult;
        return $this;
    }

}
