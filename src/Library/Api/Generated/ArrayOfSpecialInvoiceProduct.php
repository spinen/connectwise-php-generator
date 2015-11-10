<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfSpecialInvoiceProduct
{

    /**
     * @var SpecialInvoiceProduct[] $SpecialInvoiceProduct
     */
    protected $SpecialInvoiceProduct = null;

    public function __construct()
    {

    }

    /**
     * @return SpecialInvoiceProduct[]
     */
    public function getSpecialInvoiceProduct()
    {
        return $this->SpecialInvoiceProduct;
    }

    /**
     * @param SpecialInvoiceProduct[] $SpecialInvoiceProduct
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfSpecialInvoiceProduct
     */
    public function setSpecialInvoiceProduct(array $SpecialInvoiceProduct)
    {
        $this->SpecialInvoiceProduct = $SpecialInvoiceProduct;
        return $this;
    }

}
